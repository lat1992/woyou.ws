<?php 

$settings = parse_ini_file('config.ini.php', true);

if (isset($_SESSION['username']) && isset($_SESSION['role']) && isset($_SESSION['language'])) {
	if (file_exists('translation/language_' . $_SESSION['language'] . '.php')) {
		require_once('language_' . $_SESSION['language'] . '.php');
	}
	else {
		require_once('language_' . $settings['language']['default'] . '.php');
	}
}
else {
	require_once('language_' . $settings['language']['default'] . '.php');
}

?>