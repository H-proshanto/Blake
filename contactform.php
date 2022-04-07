<?php
session_start();
include "dbconn.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message =  $_POST['message'];

    $sql = "INSERT INTO contact(uname,mail,msg) values('$name','$email','$message')";
    $result2 = mysqli_query($conn,$sql);

    if($result2) {
        header("Location: contact.php?success = Your review has been saved successfully.Thank you.");
        exit();
    }
    else {
        header("Location: contact.php?error=unknown error occured");
        exit();
    }

?>
