<?php
    //receive information sent by post method
//    $username = $_POST[username];
//    $password = $_POST[password];
//    $firstname = $_POST[firstname];
//    $lastname = $_POST[lastname];
//    $uni $_POST[university];
//    $email $_POST[email];
//    $newstudent $_POST[newstudent];

    $id = $_POST[id];
    $friend = $_POST[friend];
    $tutor = $_POST[tutor];
    
    //connect to MySQL
    $servername = "mysql12.000webhost.com";
    $username = "a1331560_shubham";
    $password = "Increed123";
    $sql = mysql_connect($servername,$username,$password);
    mysql_connect($servername,$username,$password);
    //select database
    mysql_select_db("a13311560_account");
    //insert values

    $insert_query = "INSERT INTO friendtutors (id, friend, tutor) VALUES ('$id','$friend','$tutor')";
    mysql_query($insert_query);
    //close MySQL
    mysql_close($sql);
?>