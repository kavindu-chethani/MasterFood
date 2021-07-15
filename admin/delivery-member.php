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
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

    <div class="sidebar">
        <header>Master Food Admin</header>

        <ul>
            <li><a href="index.php">Dashbord</a></li>
            <li><a href="customer-details.php">Customer Details</a></li>
            <li><a href="order-details.php">Order Details</a></li>
            <li><a href="delivery-member.php" style="color: #ffa500;">Delivery Members</a></li>
            <li><a href="restaurant.php">Restaurant</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="../index.php">Home Page</a></li>
        </ul>
    </div>

    <form>
        <h1 style="text-align: center; padding: 50px;">DELIVERY MEMBER</h1>
        
<!--Table start-->
    <table class="tbl" border="1">
            <tr>
                <th>Delivery Member ID</th>
                <th>Delivery Member Name</th>
                <th>Address</th>
                <th>NIC Number</th>
                <th>Contact Number</th>
    
            </tr>


            <?php
            
                $sql = "SELECT * FROM delivery_member";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE){

                    $count = mysqli_num_rows($res);

                    if($count>0){

                        while($rows=mysqli_fetch_assoc($res)){

                            $id=$rows['dm_id'];
                            $name=$rows['dm_name'];
                            $address=$rows['dm_address'];
                            $NIC=$rows['dm_NIC'];
                            $number=$rows['dm_number'];


                            ?>

                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $NIC; ?></td>
                                    <td><?php echo $number; ?></td>
                                    
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