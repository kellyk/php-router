<?php

include_once('includes/URI_Helper.php');

if (isset($_SERVER['PATH_INFO']) && strlen($_SERVER['PATH_INFO']) > 1) {

	$segments = explode('/' , $_SERVER['PATH_INFO']);
	$controller = $segments[1];

	switch ($controller) {
		case 'search':
			include_once('controllers/SearchController.php');
			break;
		case 'login':
			include_once('controllers/LoginController.php');
			break;
		case 'profile':
			include_once('controllers/ProfileController.php');
			break;
		case 'cart':
			include_once('controllers/CartController.php');
			break;
		default:
			include_once('404.php');
			break;
	}

} else {
	include_once('home.php');
}
