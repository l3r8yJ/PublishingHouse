<?php

use App\Controllers\ArticleController;
use App\Controllers\AuthorizationController;
use App\Controllers\ViewController;
use App\Controllers\Session;
use App\Database\Storage\ArticleStorage;
use App\Database\Storage\UserStorage;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\App;
use DI\Container as Container;
use Slim\Factory\AppFactory;
use Slim\Http\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once dirname(__DIR__).'/vendor/autoload.php';
require_once dirname(__DIR__).'/Config.php';

/* Отключаем предупреждения об устаревших функциях */
error_reporting(E_ALL & ~E_DEPRECATED);

if(!file_exists(dirname(__DIR__) . '/Config.php')){
    print_r("The configuration file in the root directory does not exist");
    throw new RuntimeException();
};
if(!isset($generalConfig['MYSQL_PATH'])){
    print_r("Configuration file is not set up correctly");
    throw new RuntimeException();
};

/*Устанавливаем подключение к базе данны*/
$db = new \PDO($generalConfig['MYSQL_PATH'], 'root', 'root');

/* Используем twig*/
$loader = new FilesystemLoader ('templates');
$view = new Environment ($loader);

$container = new Container();

$articleStorage = new ArticleStorage($db);
$articleController = new ArticleController($articleStorage);
$userStorage = new UserStorage($db);

$session = new Session();
$sessionMiddleware = function (ServerRequestInterface $request, RequestHandlerInterface $handler) use ($session){
    $session->start();
    $response = $handler->handle($request);
    $session->save();

    return $response;
};

$container->set('view', $view);
$container->set('db', $db);
$container->set('session', $session);
$container->set('articleStorage', $articleStorage);
$container->set('articleController', $articleController);
$container->set('userStorage', $userStorage);


AppFactory::setContainer($container);
$app = AppFactory::create();

$container = $app->getContainer();

$app->add($sessionMiddleware);
$viewController = new ViewController($container);
$authorizationController = new AuthorizationController($container);

$app->get('/', ViewController::class . ':index');
$app->get('/login', ViewController::class . ':login');
$app->get('/registration', ViewController::class . ':registration');

$app->post('/api/login', AuthorizationController::class . ':login');
$app->post('/api/registration', AuthorizationController::class . ':registration');
$app->post('/api/logout', AuthorizationController::class . ':logout');
$app->delete('/api/article/deleteById', ArticleController::class . ':deleteById');
$app->post('/api/article/create', ArticleController::class . ':create');
$app->post('/api/article/update', ArticleController::class . ':update');

$app->run();

