<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';

$app = AppFactory::create();

$app->post('/users/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Usuario creado");
    return $response;
});

$app->get('/users/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $response->getBody()->write("Usuario con id: $id");
    return $response;
});

$app->get('/users/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Lista de usuarios");
    return $response;
});

$app->put('/users/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $response->getBody()->write("Usuario remplazado con id: $id");
    return $response;
});

$app->patch('/users/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $response->getBody()->write("Usuario con id: $id");
    return $response;
});

$app->delete('/users/{id}', function (Request $request, Response $response, $args) {
    $id = $args['id'];
    $response->getBody()->write("Usuario eliminado con id: $id");
    return $response;
});

$app->run();