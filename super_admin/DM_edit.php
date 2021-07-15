<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/register.css">
   
    <title>Document</title>
</head>
<body>
<div class="row">
<?php

$connection = mysqli_connect("localhost","root","","master_food");
    if(isset($_POST['edit_btn']))
      {
        $dm_id = $_POST['dm_id'];
        $query = "SELECT * FROM delivery_member WHERE dm_id ='$dm_id'";
        $query_run = mysqli_query($connection, $query);             
    foreach($query_run as $row)
    {
 ?>
<form action="code.php" method="POST">
<input type="hidden" name="edit_dm_id" value="<?php  echo $row['dm_id']?>">
    <div class="form-group">
        <label for="uname">Delivery Member Name</label>
        <input type="text" name="edit_membername" value="<?php echo $row['dm_name']?>" placeholder="  Name..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member Address </label>
        <input type="text" name="edit_address" value="<?php echo $row['dm_address']?>" placeholder="Address..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member NIC Number </label>
        <input type="text" name="edit_nic" value="<?php echo $row['dm_NIC']?>" placeholder="NIC Number..">
    </div>
    <div class="form-group">
        <label for="uname">Delivery Member Contact Number  </label>
        <input type="text" name="edit_contact" value="<?php echo $row['dm_number']?>" placeholder="Contact Number..">
    </div>
           
        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>

        <?php   
                        }

                    }
                                    ?> 
</div>
</body>
</html>