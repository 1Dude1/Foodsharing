<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "password");
    mysql_select_db("login");

    $result = mysql_query("SELECT * FROM users WHERE username = '$username' and password = '$passwrod'");
    $row = mysql_fetch_array($result);
?>