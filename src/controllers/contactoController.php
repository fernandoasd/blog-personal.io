<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class ContactoController{
    function Index(Request $request, Response $response,  array $args){
        $view = Twig::fromRequest($request);
        $parametros = [
            "nombre" => "fernando",
            "categoria" => "contacto"
        ];
        return $view->render($response, "contacto.html",  $parametros);

    }

}