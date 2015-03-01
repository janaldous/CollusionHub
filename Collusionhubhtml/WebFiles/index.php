<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>



<!DOCTYPE html>
<html>

<head>
<script src="https://apis.google.com/js/client:platform.js" async defer></script>

  <meta charset="UTF-8">

  <title>CodePen - Login</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <style type="text/css">
    body {
	background-image: url(../imeet-london-background.png);
}
    </style>
</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>
  
  <div class="container">

    <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <div align="center">
              <p><img src="../logowithwomen.png" alt="" width="300" height="179" align="absmiddle"/><br>
                <br>
              </p>
            </div>
            <p align="center">
            <input id = "name" type="text" name="username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" placeholder></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p align="center"><input id = "password" type="password"  name="password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p align="center"><input name = "submit" type="submit" value="Login">
            </p>
            
            

          </fieldset>
        </form>
        
        
       <meta name="google-signin-clientid" content="262323722842-4u43sn7c7c8o4cckvlut4tstl92jl4hq.apps.googleusercontent.com" />
<meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
<meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
<meta name="google-signin-cookiepolicy" content="single_host_origin" />
<script src="https://apis.google.com/js/client:platform.js?onload=render" async defer>
 /* Executed when the APIs finish loading */
 function render() {

   // Additional params including the callback, the rest of the params will
   // come from the page-level configuration.
   
   var additionalParams = {
     'callback': signinCallback
   };

   // Attach a click listener to a button to trigger the flow.
   var signinButton = document.getElementById('signinButton');
   signinButton.addEventListener('click', function() {
     
	 gapi.auth.signIn(additionalParams); // Will use page level configuration
   });
 }
</script>
<div>
  <div align="center">
    <input name="imageField" type="image" id="imageField" src="MenuButtons/sign-in-with-google.png" width="220" height="55">
  </div>
</div>
<p align="center">Not a member? <a href="register.php">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

    </div> <!-- end login -->

</div>

  </body>
</html>

</body>

</html>