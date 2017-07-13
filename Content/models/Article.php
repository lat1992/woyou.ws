<?php

require_once('Model.php');

class Article extends Model {

	public function __construct() {
		parent::__construct('article');
	}

	public function __destruct() {
		parent::__destruct();
	}

}

?>