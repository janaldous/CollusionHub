<?php
include("inserttodb.php");
?>




<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="logowithwomen.png">
		<title>Register</title>
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
  <div id="logo"></div>
  <div class="container">

    <div id="login">

        <form action="" method="post">

          <fieldset class="clearfix">

            <div align="center">
              <p><img src="../logowithwomen.png" alt="" width="300" height="179" align="absmiddle"/><br>
                <br>
              </p>
            </div>
            <p align="center">
            <input type="text" name = "firstname" value="Forename" onBlur="if(this.value == '') this.value = 'Name'" onFocus="if(this.value == 'Name') this.value = ''" required></p>
            <p align="center">
              <input type="text" name = "lastname"value="Surname" onBlur="if(this.value == '') this.value = 'Surname'" onFocus="if(this.value == 'Surname') this.value = ''" required>
            </p>
            <p align="center">
              <input name ="email" type="text" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required>
            </p>
            <p align="center">
              <input name = "username" type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required>
            </p> 
            <!-- JS because of IE support; better: placeholder="Username" -->
            <p align="center"><input name = "password" type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>
            <p align="center">
              <input name = "university" type="text" value="University" onBlur="if(this.value == '') this.value = 'University'" onFocus="if(this.value == 'University') this.value = ''" required>
            </p> 
            <!-- JS because of IE support; better: placeholder="Password" -->
            <p align="center"><input name= "submit" type="submit" value="Sign Up"></p>

          </fieldset>

        </form>

        

    </div> <!-- end login -->

</div>

  </body>
</html>

</body>

</html>