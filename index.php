<?php

use App\Controllers\BlogController;
use App\Controllers\ContactoController;
use App\Controllers\HomeController;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

// require_once "vendor/slim/twig-view/src/Twig.php";

// require_once "Slim\Views\Twig.php";
require_once "./src/controllers/homeController.php";
require_once "./src/controllers/blogController.php";
require_once "./src/controllers/contactoController.php";


require(__DIR__ . "/vendor/autoload.php");


// variable que guarde lo que devuelve slim
$app = AppFactory::create();
$twig = Twig::create("src/views", ["cache" => false]);
$app->add(TwigMiddleware::create($app, $twig));

$app->get( "/", HomeController::class.":Index");

$app->get("/contacto", ContactoController::class.":Index");

$app->get("/blog", BlogController::class.":Index");

$app->run();