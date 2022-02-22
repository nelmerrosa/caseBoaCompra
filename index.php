<?php
require __DIR__ . '/vendor/autoload.php';
require "autoload.php";

$products = Product::product();
$transport = Transport::Transports();

foreach ($transports as $transport) {

    foreach ($products as $product) {
    $cost = $transport->mathCost($product->getDistance(), $product->getHeight());
     
    $productCost = [
        //array que irá retornar os produtos com os cálculos 
    ];
    }
}

/*
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->post('/', function(Request $request, Response $response, $args) {

});

$app->run();*/
