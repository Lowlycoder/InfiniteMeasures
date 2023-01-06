<?php

use core\Database;

/** Autoload files from various places, so they are ready to use. */
class Autoloader
{
    /**
     * Autoload files in these folders.
     *
     * @var array
     */
    private array $_folders = [
        ['name' => 'core'],
        ['name' => 'app/controllers'],
        ['name' => 'app/models']
    ];

    /**
     * Store what models have been loaded.
     *
     * @var array
     */
    private array $_loadedModels = [
        ['model_name' => 'Model']
    ];

    /**
     * Database info.
     *
     * @var Database|null
     */
    private ?Database $_database = null;

    /**
     * @param array $params Autoloader params for instantiation.
     * $params [
     *   'credentials' => [ Database credentials required if loading the database
     *     'hostname' => string database host name.
     *     'username' => string database username.
     *     'password' => string database password.
     *     'database' => string database name.
     * ]]]
     */
    public function __construct(array $params = [])
    {
        foreach ($this->_folders as $folder) { // autoload files in each folder
            $this->autoloadFolderFiles($folder);
        }

        if (USE_DATABASE) { // load database
            $this->_database = new Database($params['credentials']);
        }
    }

    /**
     * @param array $folder Folder info
     * $folder = ['name' => "folder name"]
     * @return void
     */
    public function autoloadFolderFiles(array $folder): void
    {
        $pathToFolder = __DIR__ . "/../{$folder['name']}/";
        foreach (scandir($pathToFolder) as $folderFile) {
            if ('.' == $folderFile || '..' == $folderFile) {
                continue; // prevent path traversal by only loading if not dots in path
            }
            if ('app/models' == $folder['name']) { // add models to the loadedModules array
                $this->_loadedModels[] = ['model_name' => pathinfo($folderFile, PATHINFO_FILENAME)];
            }
            require_once $pathToFolder . $folderFile;
        }
    }

    public function getLoadedModels(): array
    {
        return $this->_loadedModels;
    }

    public function getDatabase(): ?Database
    {
        return $this->_database;
    }
}
