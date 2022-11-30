<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
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

$app = new \Slim\App();

$container = $app->getContainer();

$articleStorage = new \App\Database\Storage\ArticleStorage($db);
$articleController = new \App\Controllers\ArticleController($articleStorage);

$container['view'] = $view;
$container['articleStorage'] = $articleStorage;
$container['articleController'] = $articleController;

$homeController = new \App\Controllers\HomeController($container);

$app->get('/', array($homeController, 'index'));

$app->run();

