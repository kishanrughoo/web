<?php
include "../../database.php";

if (!empty($_SESSION['item_id'])){
    $items_id = $_SESSION['item_id'];
    $sql = "SELECT * FROM items WHERE items_id='$items_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if ($row['items_id'] == $items_id){
            $_SESSION['items_id'] = $row['items_id'];
            $_SESSION['category_id'] = $row['category_id'];
            $_SESSION['item_name'] = $row['item_name'];
            $_SESSION['price'] = $row['price'];
            $_SESSION['img_dir'] = $row['img_dir'];
        }
    }
}
?>