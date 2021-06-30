<?php
    $name = $_POST['name'];
    $email = $_POST['emailaddress'];
    $message = $_POST['message'];
    $number = $_POST['mobile'];
    $to = "webdeploy22@gmail.com";
    $subject = "mail for sample test";
    $txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" . "CC: someoneelse@example.com";
    if($email!=NULL){
        mail($to, $subject, $txt, $headers);
    }
    //redirect
    header("Location:thankyou.html");
?>