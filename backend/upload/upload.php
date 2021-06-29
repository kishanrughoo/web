<?php
session_start(); 
include "../../database.php";

if (isset($_POST['submit1'])){
    $file = $_FILES['prodimg'];

    $fileName = $_FILES['prodimg']['name'];
    $fileTmpName = $_FILES['prodimg']['tmp_name'];
    $fileSize = $_FILES['prodimg']['size'];
    $fileError = $_FILES['prodimg']['error'];
    $fileType = $_FILES['prodimg']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        if  ($fileError === 0){
            if ($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../../uploads/images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../../frontend/admin/adminpage.php?uploadsuccess");

                //uploading Product details to database
                $item_name = $_POST['prodname'];
                $size = $_POST['prodsize'];
                $price = $_POST['prodprice'];
                $qty = $_POST['prodqty'];
                $category = $_POST['prodcat'];
                $catno = strtok($category, '.');
                $sql2 = "INSERT INTO items(item_name, size, price, category_id, qty, img_dir) VALUES('$item_name', '$size', '$price', '$catno', '$qty', '$fileDestination')";
                $result2 = mysqli_query($conn, $sql2);

            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }
}

        
