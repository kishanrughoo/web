<?php
session_start();
include '../../database.php';

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            $items_id = $_GET['id'];
            $price = $_GET['pric'];
            $qty = $_POST['qty'];
            $total = $price * $qty;
            $sql = "INSERT INTO cart(items_id, price, qty, total) VALUES('$items_id', '$price', '$qty', '$total')";
            $result = mysqli_query($conn, $sql);
            
            break;
        case 'remove':
            $cart_id = $_GET['cartid'];
            $sql2 = "DELETE FROM cart WHERE cart_id = '$cart_id'";
            $result2 = mysqli_query($conn, $sql2);
            header("Location: ../../frontend/cart/cart.php");
            break;
        case 'empty':
            $sql3 = "DELETE FROM cart";
            $result3 = mysqli_query($conn, $sql3);
            header("Location: ../../frontend/cart/cart.php");
            break;
    }
}

?>