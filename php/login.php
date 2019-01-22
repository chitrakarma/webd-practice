<?php
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "testdb";
    $user = $_POST["name"];
    $pass = $_POST["pass"];
    $conn = new mysqli($localhost,$username,$password,$db);
    $ret = "SELECT * FROM testing";
    $result = $conn->query($ret, MYSQLI_STORE_RESULT);
    while(list($name,$passwor) = $result->fetch_row()){
        if(strcmp($name,$user)&&strcmp($passwor,$pass)){
            echo "You have logged in";
            break;
        }
    }
?>