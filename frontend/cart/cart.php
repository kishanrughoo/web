<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<!--Language-->

<head>
    <!--Description of meta (information about data used by browsers)-->
    <meta charset="utf-8">
    <meta name="keywords" content="MauriShop Shopping Website">
    <meta name="description" content="Shop with MauriShop, a trustworthy seller providing quality on time products">
    <meta name="author" content="Hadiyah Mohit, Kishan RUGHOO">

    <!--User's visible area of a web page. It varies with the device-->
    <!--The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Display the page you are in in when mouse hovers in url-->
    <title> Cart | MauriShop</title>

    <!--Linking Style Sheet-->

    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script src="../../js/bootstrap.js"></script>

    <!--Linking styles.css-->

    <link rel="stylesheet" href="../../css/styles.css">

    <!--The links for lightslider of type css from github website-->
    <link rel="stylesheet" type="text/css" href="../../css/lightslider.css">

    <!--The file containing items_ids in jQuery-->
    <script src="../../js/jQuery.js"></script>

    <!--The links for lightslider of type js from github website-->
    <script src="../../js/lightslider.js"></script>


    <!--Icon displayed on top-->
    <link href="../../images/top-icon.png" rel="shortcut icon">

    <!--Using Font awesome icons to put icons for envelop,phone number,gmail,linkedin,facebook,instagram-->
    <!--When crossorigin = "anonymous" it tells a browser to execute the https://kit.fontawesome.com/c8e4d183c2.js script without sending user-credential-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>


</head>

<body>

    <nav>

        <!--social-links-and-phone-number-->
        <?php include('../../frontend/social/social.php'); ?>


        <!--menu-bar----------------------------------------->
        <?php include('../../frontend/navigation/navigation.php'); ?>

    </nav>

    <script src="../../js/livesearch.js"></script>

    <!--search-bar----------------------------------->
    <?php include('../../frontend/searchbar/searchbar.php'); ?>


    <!--jQuery-->
    <!--Script-->
    <script type="text/javascript" src="../../script/script.js"></script>
    

    <!--shopping cart-->

    <div class="container py-5">
        <div class="d-flex justify-content-between mb-2">
            <h3>Cart</h3>
            <a class="btn btn-danger" href="../../backend/cart/cart_backend.php?action=empty">All Item Remove</a>
        </div>
        <div class="row">
            <?php
                $total_quantity = 0;
                $total_price = 0;
            ?>
            <table class="table">
                <tbody>
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">Code</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Item Price</th>
                        <th class="text-right">Price</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    <?php
                    include "../../database.php";

                    $sql1 = "SELECT cart.cart_id, cart.items_id, cart.price, cart.qty, cart.total, items.item_name, items.img_dir FROM cart INNER JOIN items ON cart.items_id=items.items_id";
                    $result1 = mysqli_query($conn, $sql1);
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $cart_id = $row1['cart_id'];
                        $item_nm = $row1['item_name'];
                        $img_dr = $row1['img_dir'];
                        $item_code = $row1['items_id'];
                        $item_price = $row1['price'];
                        $item_qty = $row1['qty'];
                        $total_p = $row1['total'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="<?= $img_dr ?>" alt="<?= $item_nm ?>" class="img-fluid" width="100">
                            <?= $item_nm ?>
                        </td>
                        <td class="text-left"><?= $item_code ?></td>
                        <td class="text-right"><?= $item_qty ?></td>
                        <td class="text-right">Rs.<?= $item_price ?></td>
                        <td class="text-right">Rs.<?= $total_p ?></td>
                        <td class="text-center">
                            <a href="../../backend/cart/cart_backend.php?action=remove&cartid=<?= $cart_id; ?>"
                                class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                            $total_quantity += $item_qty;
                            $total_price += $total_p;
                    }
                    ?>
                    <tr>
                        <td colspan="2" aligne="right">Total:</td>
                        <td></td>
                        <td aligne="right"><strong><?= $total_quantity ?></strong></td>
                        <td aligne="right"><strong>Rs<?= number_format($total_price, 2); ?></strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
        if ($total_quantity>0){
            if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
        ?>
                <a role="button" href="../../frontend/checkout/checkout.php" class="btn btn-outline-success" style="float:right;">Checkout</a>
        <?php }else{ ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float:right;">
                  Checkout
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Require Login!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        You need to be logged in to proceed.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
                      </div>
                    </div>
                  </div>
                </div>

        <?php } ?>
        <?php } ?>



        <br>
        <br>
        <br>
        <h5>Other Products:</h5>
        <br>
        <br>
        <!-- first done this -->
        <div class="container">
            <div class="row">
                <?php 
                    include "../../database.php";
                    $sql = "SELECT * FROM items";
                    $result = mysqli_query($conn, $sql);
                    $array = array();
                    
                    
                    $index = 0;
                    while($row = mysqli_fetch_assoc($result)){ // loop to store the data in an associative array.
                        $array[$index] = $row['items_id'];
                        $index++;
                    }
                    shuffle($array);
                    for ($x = 0; $x <= 2; $x++) {                       
                        $items_id = $array[$x];
                        $_SESSION['item_id'] = $items_id;    
                        include("../../backend/Fetch_item/fetch_item_for_cart.php");
                        $item_id = $_SESSION['items_id'];
                        $img_dir = $_SESSION['img_dir'];
                        $item_name = $_SESSION['item_name'];
                        $price = $_SESSION['price'];
                        echo "<div class=\"col\" style=\"height: 30rem;\">
                                <form name=\"form\" action=\"../../backend/cart/cart_backend.php?action=add&id=$item_id&pric=$price\" method=\"post\">
                                    <div class=\"card\" style=\"width: 18rem;\">
                                        <img src=\"$img_dir\" class=\"card-img-top\" alt=\"Card image cap\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">$item_name</h5>
                                            <p class=\"card-text\">RS $price</p>
                                            <input type=\"number\" style=\"float:right;\" id=\"qty\" name=\"qty\" value=\"1\" min=\"1\" max=\"100\">
                                            <button type=\"submit\"  class=\"btn btn-primary\"><i class=\"fas fa-shopping-cart\"></i></button>
                                            <span id=\"success\" style=\"display:none;\">Added to cart</span>
                                        </div>
                                    </div>
                                </form>
                            </div> ";
                    }
                    
                ?>

            </div>
        </div>
        <!-- <script src="../../js/add_universal_form.js"></script> -->
    </div>

    

    <!--login-->
    <?php include('../../frontend/login/login_form.php'); ?>

    <!--register-->
    <?php include('../../frontend/register/signup_form.php'); ?>

    <!--services------------------------->
    <?php include('../../frontend/services box/servicesbox.php'); ?>

    <!--footer---------------------------->
    <footer>
        <?php include('../../frontend/footer/footer.php'); ?>
    </footer>

    <script src="../../include/addtocart.js"></script>

</body>

</html>