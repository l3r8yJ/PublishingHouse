<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \App\Database\Storage\ArticleStorage as ArticleStorage;
use Twig\Environment;

class ArticleController {

    private ArticleStorage $articleStorage;

    public function __construct(ArticleStorage $articleStorage){
        $this->articleStorage=$articleStorage;
    }

    public function getAllArticles() {

        $articleStorage = new ArticleStorage();
        $result = $articleStorage->getAllArticles();
        return $result;

    }

    public function getAllArticlesByFilter($paramsQuery) {

        $params = array(
            'title' => "%",
            'author' => "%",
            'magazine' => "%",
            'year_release' => "%"
        );

        if(array_key_exists('title', $paramsQuery)){
            if($paramsQuery['title'] !== ""){
                $params['title'] = $paramsQuery['title'];
            }
        }

        if(array_key_exists('author', $paramsQuery)){
            if($paramsQuery['author'] !== ""){
                $params['author'] = $paramsQuery['author'];
            }
        }

        if(array_key_exists('magazine', $paramsQuery)){
            if($paramsQuery['magazine'] !== ""){
                $params['magazine'] = $paramsQuery['magazine'];
            }
        }

        if(array_key_exists('year_release', $paramsQuery)){
            if($paramsQuery['year_release'] !== ""){
                $params['year_release'] = $paramsQuery['year_release'];
            }
        }

        $result = $this->articleStorage->getAllArticlesByFilter($params);

        return $result;
    }
}