<?php
    //print_r($_POST)
    $email = $_POST['email'];
    $message = $_POST['message'];
    $error = '';
    if (trim($email) == '')
        $error = "Enter your email";
    else if (trim($message) == '')
        $error = "Enter your message";
    else if(strlen($message)<10) 
        $error = "Your message must be more than 10 symbols";
    
    if ($error != ''){
        echo $error;
        exit;
    }
    
?>