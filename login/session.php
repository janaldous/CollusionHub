 <?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("mysql12.000webhost.com	", "a1331560_shubham ", "Increed123");
	// Selecting Database
	$db = mysql_select_db("a1331560_account", $connection);
	session_start();// Starting Session
	// Storing Session
	$user_check = $_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysql_query("select username from students where 		username='$user_check'", $connection);
	$row = mysql_fetch_assoc($ses_sql);
	$login_session =$_SESSION['username'];
	print $login_session;
	print empty($login_session);
	if(!empty($login_session)){//isset($login_session)
		mysql_close($connection); // Closing Connection
		header('Location: index.php'); // Redirecting To Home Page
		
	}
?>