<?php

namespace core;

/**
 * Handles communication with the database.
 * SQL injections are prevented by using prepared statements.
 */
class Database
{
    /** Fetch multiple rows */
    public const PDO_FETCH_MULTI = 'multi';

    /** Fetch a single associative array */
    public const PDO_FETCH_SINGLE = 'single';

    /** Get the affected row count */
    public const PDO_GET_ROW_COUNT = 'count';

    /** Database connection PDO */
    private \PDO $_conn;
    private array $_parameters;
    private string $_fetchType;
    private string $_sql;
    private string $_tableName;
    private array $_where;
    private array $_join;
    private array $_orderBy;

    /**
     * Setup connection to database and initialize.
     *
     * @param array $database database credentials
     */
    public function __construct(array $database)
    {
        try { // open PDO connection to the database
            $this->_conn = new \PDO(
                "mysql:host={$database['hostname']};dbname={$database['database']}",
                $database['username'],
                $database['password']
            );
            $this->_conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // set PDO to return errors
            $this->_initialize();
        } catch (\PDOException $e) { // if database connection failed
            exit($e->getMessage());
        }
    }

    private function _initialize(): void
    {
        $this->_sql = '';
//        $this->_tableName = '';
        $this->_parameters = [];
        $this->_join = [];
        $this->_where = [];
        $this->_orderBy = [];
        $this->_fetchType = '';
    }

    public function table(string $tableName): Database
    {
        $this->_tableName = $tableName;

        return $this;
    }

    /**
     * Set a join for use when running the query.
     *
     * @param string $type        type of join (left, right, etc)
     * @param string $tableString name of the table for joining
     * @param string $onString    ON string for the join
     */
    public function join(string $type, string $tableString, string $onString): Database
    {
        $this->_join[] = [
            'type' => $type,
            'table' => $tableString,
            'on' => $onString,
        ];

        return $this;
    }

    /**
     * @param string $operator =, <, >, <=, >=, LIKE, etc. Default '='
     * @param string $type     For chaining arguments. Accepts 'AND' or 'OR' Default empty
     */
    public function where(string $column, string $value, string $operator = '=', string $type = ''): Database
    {
        $this->_where[] = [
            'column' => $column,
            'value' => $value,
            'operator' => $operator,
            'type' => $type,
        ];

        return $this;
    }

    /** Set order by for use when running the query (ASC/DESC). */
    public function orderBy(string $column, string $direction = 'ASC'): Database
    {
        $this->_orderBy[] = ['column' => $column, 'direction' => $direction];

        return $this;
    }

    public function setParameter(string $key, string $value): Database
    {
        $this->_parameters[$key] = $value;

        return $this;
    }

    public function setParameters(array $parameters): Database
    {
        foreach ($parameters as $key => $value) {
            $this->setParameter($key, $value);
        }

        return $this;
    }

    public function getParameter(string $key): string
    {
        return $this->_parameters[$key];
    }

    /** Set the fetch type the PDO result with use. */
    public function fetch(string $fetchType = Database::PDO_FETCH_SINGLE): Database
    {
        $this->_fetchType = $fetchType;

        return $this;
    }

    private function _buildJoin(): void
    {
        if (!$this->_join) {
            return;
        }

        foreach ($this->_join as $join) {
            $this->_sql .= ' '.strtoupper($join['type'])." JOIN {$join['table']} ON ( {$join['on']} )";
        }
    }

    private function _buildWhere(): void
    {
        if (!$this->_where) {
            return;
        }

        $this->_sql .= ' WHERE';
        foreach ($this->_where as $where) {
            $key = str_replace('.', '', $where['column']);

            // add where column/value to sql statement
            $this->_sql .= " {$where['type']} {$where['column']} {$where['operator']} :$key";

            // map where vars to values to be used on execution
            $this->setParameter($key, $where['value']);
        }
    }

    private function _buildOrderBy(): void
    {
        if ($this->_orderBy) {
            $orderBys = [];
            foreach ($this->_orderBy as $order) {
                $orderBys[] = "{$order['column']} {$order['direction']}";
            }
            $this->_sql .= ' ORDER BY '.implode(', ', $orderBys); // add order by to sql string
        }
    }

    /**
     * @param array $insertData array keys must be the name of the columns in the database table
     *
     * @return int|bool ID of the inserted row
     */
    public function runInsertQuery(array $insertData): int|bool
    {
//      e.g. INSERT INTO `users` (`username`, `email`, `password`) VALUES (:username, :email, :password);
        $this->_sql = "INSERT INTO `$this->_tableName` (".implode(',', array_keys($insertData)).') VALUES (:'.implode(
            ', :',
            array_keys($insertData)
        ).')';

        $this->setParameters($insertData); // add to prepared statements

        return $this->_runQuery();
    }

    /** A SELECT query requires fetch(?Database::PDO_FETCH_MULTI) to return the requested rows */
    public function runSelectQuery(string ...$columns): array|bool
    {
        $select = $columns ? implode(',', $columns) : '*';
        $this->_sql = "SELECT $select FROM `$this->_tableName`";
        $this->_buildJoin();
        $this->_buildWhere();
        $this->_buildOrderBy();

        return $this->_runQuery();
    }

    /**
     * @param array $updateData array keys are the column names
     */
    public function runUpdateQuery(array $updateData): int|bool
    {
        $setSql = '';
        $rowCount = 1;
        $this->_fetchType = Database::PDO_GET_ROW_COUNT;

        foreach ($updateData as $column => $value) {
            // add column and column variable to set sql
            $setSql .= "$column = :$column".($rowCount != count($updateData) && ', ');
            $this->setParameter($column, $value);
            ++$rowCount;
        }
        $this->_sql = "UPDATE $this->_tableName SET $setSql";
        $this->_buildWhere();

        return $this->_runQuery();
    }

    public function runDeleteQuery(): int|bool
    {
        $this->_fetchType = Database::PDO_GET_ROW_COUNT;
        $this->_sql = "DELETE FROM `$this->_tableName`";
        $this->_buildWhere();

        return $this->_runQuery();
    }

    /**
     * @param string $sql    String of the sql to execute. This should contain variables in place of the values.
     * @param array  $params Array of the params. The keys should be the :variables in the $sql string.
     */
    public function runCustomQuery(string $sql, array $params = []): int|array|bool
    {
        $this->_sql = $sql;
        $this->_parameters = $params;

        return $this->_runQuery();
    }

    private function _runQuery(): array|int|bool
    {
        $pdo = $this->_conn->prepare($this->_sql);

        $pdo->setFetchMode(\PDO::FETCH_ASSOC); // set to fetch an array

        $pdo->execute(
            array_combine(
                array_map(fn ($key) => ':'.$key, array_keys($this->_parameters)),
                array_values($this->_parameters)
            )
        ); // execute the query with the prepared statements adding a ':' to the start of the keys

        if (Database::PDO_FETCH_SINGLE == $this->_fetchType) { // fetching single array
            $result = $pdo->fetch();
        } elseif (Database::PDO_FETCH_MULTI == $this->_fetchType) { // fetch multidimensional array
            $result = $pdo->fetchAll();
        } elseif (Database::PDO_GET_ROW_COUNT == $this->_fetchType) { // return affected row count for update and delete
            $result = $pdo->rowCount();
        } else {
            $result = $this->_conn->lastInsertId(); // return last inserted/updated row id
        }
        $this->_initialize();

        return $result;
    }
}
