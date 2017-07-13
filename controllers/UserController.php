<?

require_once('models/User.php');

class UserController {

	private $_user;

	public function __construct() {
		 $this->_user = new User();
	}

	// Page

	public function login() {
		include_once('views/login.php');
	}

	public function logout() {
		include_once('views/logout.php');
	}

	public function forgotPassword() {
		include_once('views/forgot_password.php');
	}

	// Function

	public function checkAuth() {

	}

}

?>