<?php

namespace app\models;

use core\Application;
use core\Model;

class AuthModel extends Model
{
    public function register(array $user): string
    {
        $db = Application::$app->db;
        $db->table('user')
            ->where('email', $user['email'])
            ->fetch();

        if ($db->runSelectQuery()) {
            return 'Ce compte existe déjà !';
        }
        error_log('password: '.$user['passwordHash']);
        $hash = password_hash($user['passwordHash'], PASSWORD_BCRYPT, ['cost' => 12]);
        $user['passwordHash'] = $hash;
        error_log('createdHash: '.$hash);

        $id = $db->runInsertQuery($user);
        error_log('id: '.$id);

        return is_int($id) ? '' : 'error';
    }

    public function login(array $user): string
    {
        $db = Application::$app->db;
        $db->table('user');
        $db->where('email', $user['email']);
        $db->fetch();
        $row = $db->runSelectQuery();

        if (!$row || !password_verify($user['password'], $row['passwordHash'])) {
            return 'Le nom d\'utilisateur ou le mot de passe est invalide';
        }
        if (0 != $row['banned']) {
            return 'L\'utilisateur a été bani de notre service';
        }

        $db->runUpdateQuery(['lastConnection' => date('Y-m-d H:i:s')]);

        $_SESSION['user'] = [
            'id' => $row['id'],
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'email' => $user['email'],
        ];
        setcookie('session_id', session_id(), time() + (86400 * 30), '/', '', true, true);

        return '';
    }

    public function reset(string $email): string
    {
        $db = Application::$app->db
            ->table('user')
            ->where('email', $email)
            ->fetch();
        $row = $db->runSelectQuery();
        if (!$row) {
            return 'Cet utilisateur n\'existe pas';
        }
        if (0 != $row['banned']) {
            return 'L\'utilisateur a été bani de notre service';
        }
        $db->table('user')
            ->runUpdateQuery(['reset_token' => bin2hex(random_bytes(32))]);

//        @todo send email with link to reset password

        return '';
    }

    public function resetPassword(array $user): string
    {
        $db = Application::$app->db
            ->table('user')
            ->where('recoveryToken', $user['email'])
            ->fetch();
        $row = $db->runSelectQuery();
        if (!$row) {
            return 'Cet utilisateur n\'existe pas';
        }
        if (0 != $row['banned']) {
            return 'L\'utilisateur a été bani de notre service';
        }
        $hash = password_hash($user['password'], PASSWORD_BCRYPT, ['cost' => 12]);
        $db->runUpdateQuery(['passwordHash' => $hash, 'reset_token' => null]);

//        send email to user

        return '';
    }

    public function logout(): void
    {
        session_destroy();
        setcookie('session_id', '', time() - 3600, '/', '', true, true);
    }
}
