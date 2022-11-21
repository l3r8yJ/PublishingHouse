<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \App\Database\Storage\ArticleStorage as ArticleStorage;

class ArticleController {


    public function getAllArticles() {

        $articleStorage = new ArticleStorage();
        $result = $articleStorage->getAllArticles();
        return $result;

    }

    public function getAllArticlesByFilter($params) {
        $articleStorage = new ArticleStorage();
        $result = $articleStorage->getAllArticlesByFilter($params);
        return $result;
    }
}