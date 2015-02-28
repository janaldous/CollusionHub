<?php
    //receive information sent by post method
//    $username = $_POST[username];
//    $password = $_POST[password];
//    $firstname = $_POST[firstname];
//    $lastname = $_POST[lastname];
//    $uni $_POST[university];
//    $email $_POST[email];
//    $newstudent $_POST[newstudent];

    
    
	session_start(); // Starting Session
	$error='ERROR'; // Variable To Store Error Message
	
	// Define 
	$username = $_POST[username];
    $password = $_POST[password];
    $firstname = $_POST[firstname];
    $lastname = $_POST[lastname];
    $university = $_POST[university];
    $email =  $_POST[email];
    //$newstudent = $_POST[newstudent];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("mysql12.000webhost.com", "a1331560_shubham", "Increed123")  or die("1");
	// Selecting Database
	$db = mysql_select_db("a1331560_account", $connection)  or die("2");
	// SQL query to fetch information of registerd users and finds user match.
	$insert_query = "INSERT INTO `a1331560_account`.`students` (`username`, `password`, `firstname`, `lastname`, `email`, `university`, `newstudent`) VALUES ('$username', '$password', '$firstname', '$lastname', '$university', '$email', '1')";
	mysql_query($insert_query, $connection) or die("3");
	mysql_close($connection); // Closing Connection

//    //connect to MySQL
//    $servername = "mysql12.000webhost.com";
//    $username = "a1331560_shubham";
//    $password = "Increed123";
//	//$table = 'a1331560_account.students';
//    $sql = mysql_connect($servername,$username,$password) or die('cannot select db');
//    mysql_connect($servername,$username,$password) or die('cannot select db2');
//    //select databas
//    mysql_select_db("a1331560_account")  or die('cannot select db3');
//    //insert values
//
//    //$insert_query = "INSERT INTO students ('username', 'password', 'firstname', 'lastname', 'email', 'university','newstudent') VALUES ('$username','$password','$firstname','$lastname','$email','$university','1')";
//	$insert_query = "INSERT INTO students ('username', 'password', 'firstname', 'lastname', 'email', 'university','newstudent') VALUES ('asdf','asdf','asdf','asdf','asdf','asdf','1')";
//    mysql_query($insert_query) or die("Failed to send");
//    //close MySQL
//    mysql_close($sql);
?>