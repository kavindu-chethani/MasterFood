<?php
          $connection = mysqli_connect("localhost","root","","master_food");
          $query = "SELECT * FROM delivery_member";
          $query_run = mysqli_query($connection, $query);
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
                    <thead>
                        <tr>
                            <th>Delivery Member ID</th>
                            <th>Delivery Member Name</th>
                            <th>Address</th>
                            <th>NIC Number</th>
                            <th>Contact Number</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0) //count eka 0 wda wadiyenda blno
                    {
                      while($row = mysqli_fetch_assoc($query_run))
                      {
                        ?>
                        <tr>
                            <td><?php  echo $row['dm_id'];?></td>
                            <td><?php  echo $row['dm_name'];?></td>
                            <td><?php  echo $row['dm_address'];?></td>
                            <td><?php  echo $row['dm_NIC'];?></td>
                            <td><?php  echo $row['dm_number'];?></td>
                            <td>
                            <form action="DM_edit.php" method="post" >
                              <input type="hidden" name="dm_id" value="<?php  echo $row['dm_id'];?>">
                              <button type="submit" name="edit_btn" >EDIT</button>
                            </form>
                            </td>
                            <td>
                            <form action="code.php"  method="post">
                              <input type="hidden" name="dm_id_delete_id" value="<?php  echo $row['dm_id'];?>">
                              <button type="submit" name="dm_id_delete_btn" >DELETE</button>
                            </form>
                            </td>   
                        </tr>
                        <?php
                            }
                        }
                         else
                         {
                           echo "No Record Found";
                         }

                         ?>
                    </tbody>
                </table>



        <!--Table end-->
    </form>
    
</body>
</html>