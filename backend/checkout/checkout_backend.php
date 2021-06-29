<?php
session_start();
include "../../database.php";

if (isset($_POST['address'])){
    if (isset($_POST['city'])){
        if (isset($_POST['state'])){
            if (isset($_POST['zip'])){
                if (isset($_POST['cardname'])){
                    if (isset($_POST['cardnumber'])){
                        if (isset($_POST['expmonth'])){
                            if (isset($_POST['expyear'])){
                                if (isset($_POST['cvv'])){
                                    
                                    $date_time = date('Y-m-d H:i:s');

                                    $sql1 = "INSERT INTO sale_id(date_time) VALUE ('$date_time')";
                                    $result1 = mysqli_query($conn, $sql1);

                                    $sql2 = "SELECT max(sale_id) FROM sale_id";
                                    $result2 = $conn->query($sql2);
                                    $saleid_array = $result2->fetch_all();
                                    $saleid = $saleid_array[0][0];

                                    $userid = $_SESSION['user_id'];
                                    $address = $_POST['address'];
                                    $city = $_POST['city'];
                                    $state = $_POST['state'];
                                    $zip = $_POST['zip'];
                                    $cardname = $_POST['cardname'];
                                    $cardnum = $_POST['cardnumber'];
                                    $expmonth = $_POST['expmonth'];
                                    $expyear = $_POST['expyear'];
                                    $cvv = $_POST['cvv']; 

                                    $sql5 = "INSERT INTO shipping_address(`addr`, `city`, `stat`, `zip`) VALUES (\"$address\", \"$city\", \"$state\",\"$zip\")";
                                    $result5 = $conn->query($sql5);
                                    

                                    $sql6 = "INSERT INTO card_detail(name_on_card, credit_card_no, expiry_month, expiry_year, cvv_code) VALUES ('$cardname', '$cardnum', '$expmonth', '$expyear', '$cvv')";
                                    $result6 = mysqli_query($conn, $sql6);

                                    $sql7 = "SELECT max(addr_id) FROM shipping_address";
                                    $result7 = $conn->query($sql7);
                                    $addrid_array = $result7->fetch_all();
                                    $addrid = $addrid_array[0][0];

                                    $sql8 = "SELECT max(card_id) FROM card_detail";
                                    $result8 = $conn->query($sql8);
                                    $cardid_array = $result8->fetch_all();
                                    $cardid = $cardid_array[0][0];

                                    $sql = "SELECT * FROM cart";
                                    $result = mysqli_query($conn, $sql);

                                    while($row1 = mysqli_fetch_assoc($result)){
                                        $item_id = $row1['items_id'];
                                        $total_p = $row1['total'];
                                        $qty = $row1['qty'];
                                        $overall_total = $_SESSION['total'];
                                        
                                        
                                        $sql4 = "INSERT INTO sales(`sale_id`, `userid`, `item_id`, `qty`, `total`, `overall_total`, `card_id`, `addr_id`) VALUES ('$saleid','$userid','$item_id', '$qty', '$total_p', '$overall_total', '$cardid', '$addrid')";
                                        $result4 = mysqli_query($conn, $sql4);
                                    }
                                    // $username = $_SESSION['user_name']; 
                                    // $mail = "$_SESSION['email']";
                                    // $msg = "Dear ,\we inform you that your order  has been placed.\n\nMauriShop.";
                                    // $msg = wordwrap($msg,70);
                                    // mail("kishanrughoo323@gmail.com","MauriShop - Order Placed!",$msg);
                                    // header("Location: ../../frontend/cart/cart.php");
                                    exit();
                                }else{
                                    header("Location: ../../frontend/checkout/checkout.php?error=CVV missing");
                                    exit();
                                }
                            }else{
                                header("Location: ../../frontend/checkout/checkout.php?error=Expiry year missing");
                                exit();
                            }
                        }else{
                            header("Location: ../../frontend/checkout/checkout.php?error=Expiry Month missing");
                            exit();
                        }
                    }else{
                        header("Location: ../../frontend/checkout/checkout.php?error=Credit card number missing");
                        exit();
                    }
                }else{
                    header("Location: ../../frontend/checkout/checkout.php?error=Name on card missing");
                    exit();
                }
            }else{
                header("Location: ../../frontend/checkout/checkout.php?error=zip missing");
                exit();
            }
        }else{
            header("Location: ../../frontend/checkout/checkout.php?error=State missing");
            exit();
        }
    }else{
        header("Location: ../../frontend/checkout/checkout.php?error=City missing");
        exit();
    }
}else{
    header("Location: ../../frontend/checkout/checkout.php?error=Address missing");
    exit();
}

?>