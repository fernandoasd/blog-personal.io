<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class HomeController{
    function Index(Request $request, Response $response,  array $args){
        // $payload = json_encode(["mensaje" => "Hola!"], JSON_PRETTY_PRINT);
        // $response->getBody()->write($payload);
        $view = Twig::fromRequest($request);
        $parametros = [
            "title" => "Mi Sitio Web",
            "categoria" => "home"
        ];
        return $view->render($response, "index.html", $parametros);
    }
}