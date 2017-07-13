<?php

class Route {

	protected $_route;

	public function __construct() {
		$this->_route = array();

		$this->loadRoutes();
	}

	public function loadRoutes() {
		$this->_route[] = array('login', 'controllers/UserController.php', 'UserController', 'login');
		$this->_route[] = array('forgot_password', 'controllers/UserController.php', 'UserController', 'forgotPassword');
		$this->_route[] = array('logout', 'controllers/UserController.php', 'UserController', 'logout');
	}

	public function getController($page) {
		foreach ($this->_route as $key => $value) {
			if (strcmp($page, $value[0]) === 0)
				return ($this->_route[$key]);
		}
		return false;
	}
}

?>