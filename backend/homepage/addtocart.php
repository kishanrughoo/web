<?php
    include "../../database.php";
    
    $items_id = $_GET['id'];
    $price = $_GET['pric'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $sql = "INSERT INTO cart(items_id, price, qty, total) VALUES('$items_id', '$price', '$qty', '$total')";
    $result = mysqli_query($conn, $sql);
    
    exit();
?>