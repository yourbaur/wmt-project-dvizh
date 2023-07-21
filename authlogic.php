<?php
    $login = filter_var(trim($_POST['login']), 
    FILTER_SANITIZE_STRING); 
    $name = filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING); 
    $password = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING); 

    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Your login must be more than 5 symbols and less than 90";
        exit();
    } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Your name must be more than 3 symbols and less than 50";
        exit();
    } else if (mb_strlen($password) < 6 || mb_strlen($password) > 30) {
        echo "Your name must be more than 6 symbols and less than 30";
        exit();
    }
    //echo "work1";
    $conn = mysqli_connect("localhost","root","","register-bd");
    if(!$conn) {
        echo "Connection error";
    }
    else{ 
         //echo "work"; 
    }
    $password = md5($password."fsdjkhfkjdsf123");
    $sql = "INSERT INTO `users` VALUES('$login', '$name', '$password')";
    $result = mysqli_query($conn, $sql);
    header('Location: index.php');
?>