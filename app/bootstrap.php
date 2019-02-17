<?php
	require_once 'config/config.php';

	//require_once 'libraries/core.php';
	//require_once 'libraries/controller.php';
	//require_once 'libraries/database.php';

	// Autoload Core Libraries
	// The condition to run this is the class name must match with the file name
	spl_autoload_register(function($className) {
		require 'libraries/'.$className.'.php';
	});