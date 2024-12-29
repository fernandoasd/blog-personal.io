<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class BlogController{
    function Index(Request $request, Response $response,  array $args){
        $view = Twig::fromRequest($request);
        $parametros = [
            "categoria" => "blog"
        ];
        return $view->render($response, "blog.html",  $parametros);
    }
}