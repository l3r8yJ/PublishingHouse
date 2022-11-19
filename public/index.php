<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require '../vendor/autoload.php';

/* Отключаем предупреждения об устаревших функциях */
error_reporting(E_ALL & ~E_DEPRECATED);

/* Используем twig*/
$loader = new FilesystemLoader ('templates');
$view = new Environment ($loader);


$app = new \Slim\App();

$container = $app->getContainer();

$container['view'] = $view;

$app->get('/', function (Request $request, Response $response, array $args) {

    $view = $this->get('view');

    $articleController = new \App\Controllers\ArticleController();

    $articles = $articleController->getAllArticles();

    $body = $view->render('home.twig', [
      'articles' => $articles
    ]);
  
    $response->getBody()->write($body);

    return $response;
});

$app->get('/filter', function (Request $request, Response $response, array $args){
  
  $view = $this->get('view');

  $articleController = new \App\Controllers\ArticleController();

  $json = $request->getParsedBody();
  json_encode($json, true);

  $articles = $articleController->getAllArticlesByFilter($json);

  $body = $view->render('home.twig', [
    'articles' => $articles
  ]);

  $response->getBody()->write($body);

  return $response;

});

$app->run();