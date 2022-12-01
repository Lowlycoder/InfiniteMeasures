<?php

namespace app\models;

use core\Database;
use core\Model;

class HomeModel extends Model
{
    public function getPageText(): array
    {
        // get page text from database or code
        return USE_DATABASE ? $this->getTextFromDB() : $this->getTextFromCode();
    }

    public function getTextFromDB(): array
    {
        $this->database->table('templates');
        $this->database->join('left', 'template_links', 'template_links.template_id = templates.id');
        $this->database->where('templates.id', '1');
        $this->database->orderBy('template_links.title');
        $this->database->fetch(Database::PDO_FETCH_MULTI);

        $templateLinks = $this->database->runSelectQuery('templates.*', 'template_links.title as link_title', 'template_links.url as link_url');

        $page = ['info' => [], 'links' => []];

        foreach ($templateLinks as $link) {
            $page['info'] = $link;
            $page['links'][] = $link;
        }

        return $page;
    }

    public function getTextFromCode(): array
    {
        return [
            'info' => [
                'title' => 'Home',
                'subtitle' => 'simple PHP MVC framework.',
                'description' => 'This is my PHP MVC framework',
            ],
            'links' => [
                [
                    'link_title' => 'GitLab',
                    'link_url' => 'https://gitlab.com/'
                ],
                [
                    'link_title' => 'Repl.it',
                    'link_url' => 'https://replit.com/'
                ]
            ]
        ];
    }
}
