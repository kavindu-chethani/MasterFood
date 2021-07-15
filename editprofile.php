<?php

    session_start();

    include("connection/connection2.php");
    include("config/function.php");

    $user_data = check_login($con);     // call check_login funtiion to check user is log or not
    
?>






<?php include("include/header(editprofile).php"); ?>






<div class="row">
            <div class="col-md-6">
                <div class="account">
                    <div class="profile">
                        <img src="images/01.png" alt="Avatar" class="avatar">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="account">
                <?php

                $connection = mysqli_connect("localhost","root","","master_food");
                
                        $user_id = $user_data['id'];

                        $query = "SELECT * FROM customer WHERE id ='$user_id'";
                        $query_run = mysqli_query($connection, $query);
                        
                        foreach($query_run as $row)
                        {
                              ?>
                                <form action="code.php" method="POST">
                                <input type="hidden" name="id" value="<?php  echo $row['id']?>">
                                        <div class="form-group">
                                            <label for="fname"> First Name</label>
                                            <input type="text" name="edit_fname" value="<?php echo $row['first_name']?>"  placeholder="Your First Name..">
                                        </div>
                                        <div class="form-group">
                                            <label for="lname"> Last Name</label>
                                            <input type="text" name="edit_lname" value="<?php echo $row['last_name']?>"  placeholder="Your Last Name..">
                                        </div>

                                        <div class="form-group">
                                            <label for="uname"> User Name</label>
                                            <input type="text" name="edit_username" value="<?php echo $row['user_name']?>" placeholder="Your User Name..">
                                        </div>

                                        <div class="form-group">
                                            <label for="email"> Email</label>
                                            <input type="email"  name="edit_email" value="<?php echo $row['email']?>"  placeholder="Your Email..">
                                        </div>
                                        <div class="form-group">
                                            <label for="address"> Address</label>
                                            <input type="text" name="edit_address" value="<?php echo $row['address']?>"  placeholder="Your Address..">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactno"> Contact No</label>
                                            <input type="number"  name="edit_contactno"  value="<?php echo $row['contact_number']?>" placeholder="Your Contact No..">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="password"> Password</label>
                                            <input type="password" name="edit_password" value="<?php echo $row['password']?>"  placeholder="Your Password..">
                                        </div>

                                    <input type="submit" name="updatebtn" value="Update">
                                    <input type="submit"  name="deletebtn" value="Delete">

                                <?php   
                        }

                    
                                    ?>  


                </div>
            </div>
        </div>







        

<?php include('include/footer.php'); ?>