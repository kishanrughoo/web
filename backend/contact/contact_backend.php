<?php
    session_start();
    include "../../database.php";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    // echo $msg;
    // echo $subject;
    // echo $email;
    // echo $name;

    $sql = "INSERT INTO message(name, email, subject, message) VALUES('$name', '$email', \"$subject\", \"$msg\")";
    $result = mysqli_query($conn, $sql);
    exit();
?>