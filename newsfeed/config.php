<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "NEWS");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__).'/opt/lampp/htdocs/Kafue_Ward/newsfeed/'));
	define('BASE_URL', 'http://localhost/Kafue_Ward/newsfeed/');
?>