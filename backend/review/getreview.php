<?php
    include "../../database.php";
    
        $itemid = $_GET['id'];
        $sql2 = "SELECT review.review, review.status, user.user_name FROM review INNER JOIN user ON review.user_id=user.user_id WHERE review.item_id='$itemid' GROUP BY review.review_id DESC";
        $exec = mysqli_query($conn, $sql2);
        ?>
        <table>
            <tr>
                <th style="padding-right:50px;">User Name</th>
                <th>Review</th>
            </tr>
        <?php
            while($row = mysqli_fetch_assoc($exec)){
                $username = $row['user_name'];
                $review = $row['review'];
                $status = $row['status'];
                ?>
                
                    
                    <tr>
                        <td><?php echo $username?></td>
                        
                        <?php
                        if($status == "good"){
                        ?>
                            <td style="color:green;"><?php echo $review?></td>
                        <?php
                        }else{
                        ?>
                            <td style="color:red;"><?php echo $review?></td>
                        <?php
                        }
                        ?>
                        
                    </tr>
                
            <?php
            }  ?>
        </table>

