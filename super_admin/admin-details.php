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
            <li><a href="admin-details.php" style="color: #ffa500;">Admin Details</a></li>
            <li><a href="delivery-member.php">Delivery Members</a></li>
            <li><a href="restaurant.php">Restaurant</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="../index.php">Home Page</a></li>
        </ul>
    </div>

    <form>
        <h1 style="text-align: center; padding: 50px;">CUSTOMER FEEDBACK</h1>
        
        <!--Table start-->
        <table class="tbl" border="1">
            <tr>
                <th>Admin ID</th>
                <th>Admin Name</th>
                <th>Admin User Name</th>
                <th>Password</th>
                
            </tr>

            <?php
            
                $sql = "SELECT * FROM admin";
                $res = mysqli_query($conn, $sql);

                if($res==TRUE){

                    $count = mysqli_num_rows($res);

                    if($count>0){

                        while($rows=mysqli_fetch_assoc($res)){

                            $aid=$rows['ad_id'];
                            $aname=$rows['ad_name'];
                            $ausername=$rows['ad_username'];
                            $pass=$rows['password'];
                            


                            ?>

                                <tr>
                                    <td><?php echo $aid; ?></td>
                                    <td><?php echo $aname; ?></td>
                                    <td><?php echo $ausername; ?></td>
                                    <td><?php echo $pass; ?></td>
                                    
                                    
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