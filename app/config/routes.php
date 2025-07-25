<?php

use app\controllers\ApiExampleController;
use app\controllers\HomeController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Instanciar o HomeController
$homeController = new HomeController($app);

// Rotas principais da Tronco Forte
$router->get('/', [$homeController, 'index']);
$router->get('/produtos', [$homeController, 'produtos']);
$router->get('/projetos', [$homeController, 'projetos']);
$router->get('/sustentabilidade', [$homeController, 'sustentabilidade']);
$router->get('/sobre', [$homeController, 'sobre']);
$router->get('/contato', [$homeController, 'contato']);
$router->post('/contato', [$homeController, 'submitContact']);

$router->get('/hello-world/@name', function($name) {
	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
});

$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});