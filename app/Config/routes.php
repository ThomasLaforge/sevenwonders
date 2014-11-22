<?php
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/home', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/*', array('controller' => 'pages', 'action' => 'index'));

	CakePlugin::routes();
	require CAKE . 'Config' . DS . 'routes.php';
