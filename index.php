<?php
/*
** Capital Vision Copyright 2016
** Contribute by Jean-Stephane and Mauhoi
*/

/*
** ALL CHECKS
*/

header('content-type: text/html; charset=utf-8');

if (session_status() == PHP_SESSION_NONE) {
	session_name("WoYou");
	session_start();
}

require_once('translations/index.php');

$page = '';

if (isset($_GET['page']) && !strcmp($_GET['page'], 'forgot_password')) {
	$page = $_GET['page'];
}
else if (isset($_SESSION['username']) && isset($_SESSION['role']) && isset($_GET['page']) && empty($page)) {
	$page = $_GET['page'];
}
else {
	$page = 'login';
}

require_once('Route.php');

$route = new Route();
$controller = $route->getController($page);

if (!$controller) {
	echo 'NOT FOUND';
	return;
}
else {
	require_once($controller[1]);
	$controllerObject = new $controller[2];
	$action = $controller[3];
	$controllerObject->$action();
}

?>