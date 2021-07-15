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
            <li><a href="customer-details.php" style="color: #ffa500;">Customer Details</a></li>
            <li><a href="order-details.php">Order Details</a></li>
            <li><a href="delivery-member.php">Delivery Members</a></li>
            <li><a href="restaurant.php">Restaurant</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="../index.php">Home Page</a></li>
        </ul>
    </div>

    <form>
        <h1 style="text-align: center; padding: 50px;">CUSTOMER DETAILS</h1>
        



<!--Table start-->
<table class="tbl" border="1">
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Address</th>
    
            </tr>


            <?php
            
                $sql = "SELECT * FROM customer";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE){

                    $count = mysqli_num_rows($res);

                    if($count>0){

                        while($rows=mysqli_fetch_assoc($res)){

                            $id=$rows['id'];
                            $first_name=$rows['first_name'];
                            $last_name=$rows['last_name'];
                            $user_name=$rows['user_name'];
                            $email=$rows['email'];
                            $contact_number=$rows['contact_number'];
                            $address=$rows['address'];


                            ?>

                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $first_name; ?></td>
                                    <td><?php echo $last_name; ?></td>
                                    <td><?php echo $user_name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $contact_number; ?></td>
                                    <td><?php echo $address; ?></td>
                                    
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