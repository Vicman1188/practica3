<?php
	require("../vendor/autoload.php");

	$app = new \Slim\Slim(
	 array(
		'view' => new \Slim\Views\Blade(),
		'templates.path' => '../templates',
		)
		);
		
		$view = $app->view();
	$view->parserOptions = [
		'debug' => true,
		'cache' => "../html_cache"
	];
	

	$app->get('/hey', function() use ($app){
		
		$app->render('index');
	});

	$app->run();

