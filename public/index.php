<?php

require_once '../vendor/autoload.php';

use Core\Router;
$router = new Router();

$router->add('', ['controller' => 'App\Controllers\HomeController', 'action' => 'index']);
$router->add('transaction', ['controller' => 'App\Controllers\TransactionController', 'action' => 'index']);


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);
