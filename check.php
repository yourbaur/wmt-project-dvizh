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
    $subject = "=?utf-8?B?".base64_encode("Test Message")."?=";
    $headers = "From: $email\r\nReply-to:$email\r\nContent-Type: text/html;charset=utf-8\r\n";
    mail('bauyrzhan.taimanov01@universitadipavia.it', $subject, $message, $headers);
    //redirect to previous page
    header('Location: about.php') 
?>