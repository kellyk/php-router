<?php

if (isset($_SERVER['PATH_INFO']) && strlen($_SERVER['PATH_INFO']) > 1) {

	$segments = explode('/' , $_SERVER['PATH_INFO']);

	// build our class name from URL and load its file
	$controller = ucwords($segments[1]) . 'Controller';
	require_once('controllers/' . $controller . '.php');

	// instantiate new controller
	$page = new $controller();

	// check for method in URL
	// if a legitimate method is found, execute it
	if (sizeof($segments) > 2 && $segments[2] )
		$method = $segments[2];
	else
		$method = 'index';

	//security check that method exists
	if(method_exists($page, $method))
		$page->$method();

} else
	include_once('home.php');