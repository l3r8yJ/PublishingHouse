<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \App\Database\Storage\ArticleStorage as ArticleStorage;
use \App\Controllers\ArticleController as ArticleController;
use Twig\Environment;
use Slim\Container as Container;

class HomeController{

    private Environment $view;
    private ArticleStorage $articleStorage;
    private ArticleController $articleController;

    public function __construct(Container $container){

        $this->view = $container->get('view');
        $this->articleStorage = $container->get('articleStorage');
        $this->articleController = $container->get('articleController');
    }

    public function index(Request $request, Response $response, array $args)
    {

        $paramsQuery = $request->getQueryParams();

        $articles = $this->articleController->getAllArticlesByFilter($paramsQuery);

        $body = $this->view->render('home.twig', [
            'articles' => $articles
        ]);

        return $response->getBody()->write($body);
    }

}