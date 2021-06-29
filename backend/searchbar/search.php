<!DOCTYPE html>
<html lang="en">
<!--Language-->

<head>
    <!--Description of meta (information about data used by browsers)-->
    <meta charset="utf-8">
    <meta name="keywords" content="MauriShop Shopping Website">
    <meta name="description" content="Shop with MauriShop, a trustworthy seller providing quality on time products">
    <meta name="author" content="Hadiyah Mohit">

    <!--User's visible area of a web page. It varies with the device-->
    <!--The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Display the page you are in in when mouse hovers in url-->
    <title> Home | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/fotorama.css">


    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The file containing codes in jQuery-->
    <script src="../../js/jquery-3.4.1.js"></script>


    <!--The links for lightslider of type js from github website-->
    <script src="../../js/lightslider.js"></script>


    <!--Icon displayed on top-->
    <link href="../../images/top-icon.png" rel="shortcut icon">

    <!--Using Font awesome icons to put icons for envelop,phone number,gmail,linkedin,facebook,instagram-->
    <!--When crossorigin = "anonymous" it tells a browser to execute the https://kit.fontawesome.com/c8e4d183c2.js script without sending user-credential-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>


</head>

<body>
    <?php
    session_start();
    include '../../database.php';


        $str = $_POST['search'];
        $sql = "SELECT items_id FROM items WHERE item_name = \"$str\"";

        $sth = mysqli_query($conn, $sql);
        $norow = mysqli_num_rows($sth);
        if($norow > 0)
        {
            $array = array();
                    
                    
            $index = 0;
            while($row = mysqli_fetch_assoc($sth)){ // loop to store the data in an associative array.
                $array[$index] = $row;
                $index++;
            }
            foreach($array as $items_id){
                $_SESSION['item_id'] = implode("",$items_id) ;    
                include("../../backend/Fetch_item/fetch_item_for_cart.php");
                $item_id = $_SESSION['items_id'];
                $img_dir = $_SESSION['img_dir'];
                $item_name = $_SESSION['item_name'];
                $price = $_SESSION['price'];
            ?>
            <br><br><br>
                <div class="col" style="height: 30rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $img_dir ?>" class="card-img-top" alt="Card image cap">
                        <div class="card-body" style="height: 10rem;">
                            <form name="form" action="../../backend/searchbar/addtocart.php?id=<?php echo $item_id?>&pric=<?php echo $price?>" method="post">
                                <h5 class="card-title"><?php echo $item_name ?></h5>
                                <p class="card-text">RS <?php echo $price ?></p>
                                <input type="number" style="float:right;" id="qty" name="qty" value="1" min="1" max="100">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></button>
                                <span style="display:none;">Added to cart</span>
                            </form>
                        </div>
                    </div>
                </div>
            
        <?php 
        }
            
            
        }else{
                echo "Item Does not exist";
            }


    

    ?>
    <script src="../../include/addtocart.js"></script>
</body>
</html>