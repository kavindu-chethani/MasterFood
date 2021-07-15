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
            <li><a href="order-details.php">Order Details</a></li>
            <li><a href="admin-details.php">Admin Details</a></li>
            <li><a href="delivery-member.php">Delivery Members</a></li>
            <li><a href="restaurant.php" style="color: #ffa500;">Restaurant</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="../index.php">Home Page</a></li>
        </ul>
    </div>

    <form>
        <h1 style="text-align: center; padding: 50px;">RESTAURANT</h1>
        


            <!--Table start-->
            <table class="tbl" border="1">
            <tr>
                <th>Restaurant ID</th>
                <th>Restaurant Name</th>
                <th>Restaurant Address</th>
                <th>Contact Number</th>
                
            </tr>

            <?php
            
                $sql = "SELECT * FROM restaurant";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE){

                    $count = mysqli_num_rows($res);

                    if($count>0){

                        while($rows=mysqli_fetch_assoc($res)){

                            $rid=$rows['res_id'];
                            $rname=$rows['res_name'];
                            $address=$rows['address'];
                            $num=$rows['con_number'];
                            


                            ?>

                                <tr>
                                    <td><?php echo $rid; ?></td>
                                    <td><?php echo $rname; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $num; ?></td>
                                    
                                    
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