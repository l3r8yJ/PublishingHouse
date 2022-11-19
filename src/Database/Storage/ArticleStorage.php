<?php

namespace App\Database\Storage;

class ArticleStorage{

    public function getAllArticles () {

        $dsn = "mysql:host=localhost;dbname=PublishingHouse";
       

        $dbh = new \PDO($dsn, 'root', 'root');

        $resultArticlesList = array();

        $stmt = $dbh->query("SELECT  article_announcement_picture , 
        articles.title, articles.text, author,year_release , 
        magazines.title AS 'magazine_title' FROM PublishingHouse.articles 
        INNER JOIN PublishingHouse.magazines ON id_magazine = magazines.id");

        while ($row = $stmt->fetch()){
            array_push($resultArticlesList, $row);
        }

        return $resultArticlesList;
        
    }

    public function getAllArticlesByFilter($params) {
        $dsn = "mysql:host=localhost;dbname=PublishingHouse";

        $dbh = new \PDO($dsn, 'root', 'root');

        $resultArticlesList = array();

        $stmt = $dbh->prepare("SELECT  article_announcement_picture , 
        articles.title, articles.text, author,year_release , magazines.title 
        AS 'magazine_title' FROM PublishingHouse.articles INNER JOIN PublishingHouse.magazines ON 
        id_magazine = magazines.id 
        WHERE articles.`title` = :title OR magazines.title = :magazine OR articles.author = :author OR articles.year_release= :year_release");

        $stmt->execute(['title' => $params['_title'],
                        'magazine' => $params['_input_magazine'],
                        'author' => $params['_author'],
                        'year_release' => $params['_input_year']
        ]);

        while ($row = $stmt->fetch()){
            array_push($resultArticlesList, $row);
        }

        return $resultArticlesList;

        

    }

    
}