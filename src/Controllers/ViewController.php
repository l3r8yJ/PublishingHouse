<?php

namespace App\Controllers;

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \App\Database\Storage\ArticleStorage as ArticleStorage;
use \App\Controllers\ArticleController as ArticleController;
use Twig\Environment;


class ViewController{

    private Environment $view;
    private Session $session;
    private ArticleStorage $articleStorage;
    private ArticleController $articleController;

    public function __construct(Container $container){

        $this->view = $container->get('view');
        $this->session = $container->get('session');
        $this->articleStorage = $container->get('articleStorage');
        $this->articleController = $container->get('articleController');
    }


    public function index(Request $request, Response $response)
    {

        $paramsQuery = $request->getQueryParams();

        $articles = $this->articleController->getAllArticlesByFilter($paramsQuery);

        if(!array_key_exists('title', $paramsQuery )){

            $params = array(
                'title' => "%",
                'author' => "%",
                'magazine' => "%",
                'year_release' => "%"
            );

            $articles = $this->articleController->getAllArticlesByFilter($params);
        } else {
            $articles = $this->articleController->getAllArticlesByFilter($paramsQuery);
        }

        $body = $this->view->render('home.twig', [
            'articles' => $articles,
            'user' => $this->session->getData('user')
        ]);

        $response->getBody()->write($body);

        return $response;
    }

    public function login (Request $request, Response $response, array $args){
        $body = $this->view->render('login.twig', [
            'message'=>$this->session->flush('message')
        ]);

        $response->getBody()->write($body);

        return $response;
    }

    public function registration (Request $request, Response $response, array $args){
        $body = $this->view->render('registration.twig',[
            'message'=>$this->session->flush('message')
        ]);

        $response->getBody()->write($body);

        return $response;

    }

}