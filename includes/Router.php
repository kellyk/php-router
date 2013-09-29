<?php

include_once('includes/URI_Helper.php');

if (isset($_SERVER['PATH_INFO']) && strlen($_SERVER['PATH_INFO']) > 1) {

	$segments = explode('/' , $_SERVER['PATH_INFO']);

	//build our class and method names from URL
	$controller = ucwords($segments[1]) . 'Controller';
	if ( $segments[2] )
		$method = $segments[2];

	//require proper controller based on URL
	require_once('controllers/' . $controller . '.php');

	//instantiate new controller
	$page = new $controller();

	//security check that method exists
	if(method_exists($page, $method))
		$page->$method();

} else {
	include_once('home.php');
}
