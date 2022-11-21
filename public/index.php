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

$app->get('/', function (Request $request, Response $response, array $args){

  $articleController = new \App\Controllers\ArticleController();

  $paramsQuery = $request->getQueryParams();

  $params = array(
      'title' => "%",
      'author' => "%",
      'magazine' => "%",
      'year_release' => "%"
  );

  if($paramsQuery['title'] !== ""){
      $params['title'] = $paramsQuery['title'];
  }

  if($paramsQuery['author'] !== ""){
    $params['author'] = $paramsQuery['author'];
  }

  if($paramsQuery['magazine'] !== ""){
    $params['magazine'] = $paramsQuery['magazine'];
}

  if($paramsQuery['year_release'] !== ""){
    $params['year_release'] = $paramsQuery['year_release'];
  }
  
  

  $articles = $articleController->getAllArticlesByFilter($params);

  $view = $this->get('view');

  $body = $view->render('home.twig', [
    'articles' => $articles
  ]);
  
  return $response->getBody()->write($body);

});

$app->run();