<?php

    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'master_food') or die(mysqli_error());


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin</title>
    <link rel="stylesheet" href="../css/superadmin.css">
</head>
<body>

    <div class="sidebar">
        <header>Super Admin</header>

        <ul>
            <li><a href="index.php">Dashbord</a></li>
            <li><a href="add-admin.php">Add Admin</a></li>
            <li><a href="customer-details.php">Customer Details</a></li>
            <li><a href="order-details.php" style="color: #ffa500;">Order Details</a></li>
            <li><a href="admin-details.php">Admin Details</a></li>
            <li><a href="delivery-member.php">Delivery Members</a></li>
            <li><a href="restaurant.php">Restaurant</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="../index.php">Home Page</a></li>
        </ul>
    </div>

    <form>
        <h1 style="text-align: center; padding: 50px;">ORDER DETAILS</h1>
        
<!--Table start-->
<table class="tbl" border="1">
            <tr>
                <th>Order ID</th>
                <th>Food Name</th>
                <th>Restaurant Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Note</th>
                <th>Delivery charge</th>
    
            </tr>


            <?php
            
                $sql = "SELECT * FROM order_details";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE){

                    $count = mysqli_num_rows($res);

                    if($count>0){

                        while($rows=mysqli_fetch_assoc($res)){

                            $oid=$rows['order_id'];
                            $oname=$rows['food_name'];
                            $restname=$rows['restaurant_name'];
                            $price=$rows['food_price'];
                            $q=$rows['quantity'];
                            $n=$rows['note'];
                            $dcharge=$rows['delivery_charge'];


                            ?>

                                <tr>
                                    <td><?php echo $oid; ?></td>
                                    <td><?php echo $oname; ?></td>
                                    <td><?php echo $restname; ?></td>
                                    <td><?php echo $price; ?></td>
                                    <td><?php echo $q; ?></td>
                                    <td><?php echo $n; ?></td>
                                    <td><?php echo $dcharge; ?></td>
                                    
                                </tr>


                            <?php
                        }
                    }else{
                        // Dont have data in database
                    }
                }
            
            ?>


    </table>
<!--Table end-->


    </form>
    
</body>
</html>