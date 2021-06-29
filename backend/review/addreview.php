<?php
    session_start();
    include "../../database.php";
    
    $items_id = $_GET['id'];
    $userid = $_SESSION['user_id'];
    $review = $_POST['review'];
    $status = $_POST['radio'];
    $sql = "INSERT INTO review(user_id, review, item_id, status) VALUES('$userid', \"$review\", '$items_id', '$status')";
    $result = mysqli_query($conn, $sql);

    exit();
?>