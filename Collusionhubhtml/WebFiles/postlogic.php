<?php
    session_start(); // Starting Session
	$error='ERROR'; // Variable To Store Error Message
	
	// Define

	$username = $_SESSION['login_user'];
	echo $_SESSION['login_user'];
	$post = $_POST[post];
    $date = $_POST[date];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("mysql12.000webhost.com", "a1331560_shubham", "Increed123")  or die("1");
	// Selecting Database
	$db = mysql_select_db("a1331560_account", $connection)  or die("2");
	// SQL query to fetch information of registerd users and finds user match.
	$insert_query = "INSERT INTO `a1331560_account`.`posts` (`username`, `date`, `post`) VALUES ('$username', '$date', '$post')";
	mysql_query($insert_query, $connection) or die("3");
	mysql_close($connection); // Closing Connection
?>