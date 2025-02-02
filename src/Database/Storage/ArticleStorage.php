<?php

namespace App\Database\Storage;

class ArticleStorage {

    private \PDO $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getAllArticles () {

        $resultArticlesList = array();

        $stmt = $this->db->query("SELECT  article_announcement_picture , 
        articles.title, articles.text, author,year_release , 
        magazines.title AS 'magazine_title' FROM PublishingHouse.articles 
        INNER JOIN PublishingHouse.magazines ON id_magazine = magazines.id");

        while ($row = $stmt->fetch()){
            array_push($resultArticlesList, $row);
        }

        return $resultArticlesList;
        
    }

    public function getAllArticlesByFilter ($params) {

        $resultArticlesList = array();

        $stmt = $this->db->prepare('SELECT  article_announcement_picture , 
        articles.title, articles.text, author,year_release , magazines.title AS magazine_title 
        FROM PublishingHouse.articles INNER JOIN PublishingHouse.magazines 
        ON id_magazine = magazines.id WHERE articles.`title` LIKE (:title) 
        AND magazines.title LIKE (:magazine) AND articles.author LIKE (:author) AND articles.year_release LIKE (:year_release)');

        $stmt->bindValue(':title', $params['title'], \PDO::PARAM_STR);
        $stmt->bindValue(':magazine', $params['magazine'], \PDO::PARAM_STR);
        $stmt->bindValue(':author', $params['author'], \PDO::PARAM_STR);
        $stmt->bindValue(':year_release', $params['year_release'], \PDO::PARAM_STR);

        /*$stmt->execute(['title' => $params['title'],
                        'magazine' => $params['magazine'],
                        'author' => $params['author'],
                        'year_release' => $params['year_release']
        ]);*/

        $stmt->execute();
       

        while ($row = $stmt->fetch()){
            array_push($resultArticlesList, $row);
        }
        
        return $resultArticlesList;
    }
 
}