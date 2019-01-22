<?php
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "testdb";
    $conn = new mysqli($localhost,$username,$password,$db);
    echo "connection established <br />";
    $crtable = "CREATE TABLE testing (name varchar(20), password varchar(20));";
    $conn->query($crtable);
    echo "<br /> query ran successfully <br />";
    $user = $_POST["name"];
    $pass = $_POST["pass"];
    $sql = "INSERT INTO testing VALUES ('$user', '$pass');";
    $conn->query($sql);
    echo "data entered <br />";
?>