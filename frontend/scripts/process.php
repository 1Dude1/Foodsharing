<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real($username);
    $password = stripcslashes($password);
    
?>