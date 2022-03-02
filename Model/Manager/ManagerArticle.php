<?php

namespace App\Model\Manager;

use App\Model\Entity\Article;

class ManagerArticle {

    public function getAll(): array {
        $articles = [];
        $query = \DB_Connect::dbConnect()->query("SELECT * FROM article");

        if ($query) {
            $managerUser = new ManagerUser();
            $format = "Y-m-d H:i:s";
            foreach ($query->fetchAll() as $article) {
                $articles[] = (new Article())
                    ->setId($article['id'])
                    ->setAuthor($managerUser->getUserById($article['user_fk']))
                    ->setContent($article['content'])
                    ->setDateAdd(\DateTime::createFromFormat($format, $article['date_add']))
                    ->setDateUpdate(\DateTime::createFromFormat($format, $article['date_update']))
                    ->setTitle($article['title']);
            }
        }
        return $articles;
    }
}