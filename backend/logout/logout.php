<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    header("Location:../../frontend/homepage/homepage.php");
?>