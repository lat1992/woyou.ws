<?php
/*
** Capital Vision Copyright 2016
** Contribute by Jean-Stephane and Mauhoi
*/

/*
** ALL CHECKS
*/

$page = '';

if (isset($_GET['token']) && isset($_GET['page']) && empty($page)) {
	$page = $_GET['page'];
}
else {
	echo 'ERROR';
	return;
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