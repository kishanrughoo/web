<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    header("Location: ../../frontend/checkout/checkout.php");
    exit();
}else{
    header("Location: ../../frontend/cart/cart.php?error=You need to be logged in to proceed");
    exit();
}
?>