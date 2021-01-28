<?php
	require_once('connection.php');

	session_start();
	define('IS_LOGGED', ! empty($_SESSION['is_logged']));

	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action     = $_GET['action'];
	} else {
		$controller = 'pages';
		if(IS_LOGGED)
			$action = 'main';
		else 
			$action = 'login';
	}

	require_once('views/layout.php');
?>