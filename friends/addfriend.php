<?php
    session_start(); // Starting Session
	$error='ERROR'; // Variable To Store Error Message
	
	// Define

	$id = $_POST[id];
	$friend = $_POST[friend];
    $tutor = $_POST[tutor];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("mysql12.000webhost.com", "a1331560_shubham", "Increed123")  or die("1");
	// Selecting Database
	$db = mysql_select_db("a1331560_account", $connection)  or die("2");
	// SQL query to fetch information of registerd users and finds user match.
	$insert_query = "INSERT INTO `a1331560_account`.`friendtutors` (`id`, `friends`, `tutors`) VALUES ('$id', '$friends', '$tutors')";
	mysql_query($insert_query, $connection) or die("3");
	mysql_close($connection); // Closing Connection
?>