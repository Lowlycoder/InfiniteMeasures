<?php

namespace app\models;

use core\Application;
use core\Database;
use core\Model;

class HomeModel extends Model
{
//    public function getTextFromDB(): array
//    {
//        $db = Application::$app->db;
//        $db->table('templates');
//        $db->join('left', 'template_links', 'template_links.template_id = templates.id');
//        $db->where('templates.id', '1');
//        $db->orderBy('template_links.title');
//        $db->fetch(Database::PDO_FETCH_MULTI);
//
//        $templateLinks = $db->runSelectQuery('templates.*', 'template_links.title as link_title', 'template_links.url as link_url');
//
//        $page = ['info' => [], 'links' => []];
//
//        foreach ($templateLinks as $link) {
//            $page['info'] = $link;
//            $page['links'][] = $link;
//        }
//
//        return $page;
//    }

    public function getFAQ(): array
    {
        $db = Application::$app->db;
        $db->table('faq');
        $db->fetch(Database::PDO_FETCH_MULTI);

        return $db->runSelectQuery();
    }

    public function sendContactEmail(string $email, string $name, string $subject, string $message): bool
    {
        try {
            Application::$app->mailer
                ->toAdmin()
                ->replyTo($email, $name)
                ->subject($subject)
                ->body('contact', ['name' => $name, 'message' => $message])
                ->send();
        } catch (\Exception $e) {
            error_log($e->getMessage());

            return false;
        }

        return true;
    }
}
