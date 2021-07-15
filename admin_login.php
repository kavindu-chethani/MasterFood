<?php

    session_start();

    include("connection/connection2.php");
    include("config/function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){                          // if server request method equal to POST

        // something was posted
        $ad_username = $_POST['ad_username'];                             // collect data from form and stor variable
        $password = $_POST['password'];

        if(!empty($ad_username) && !empty($password) && !is_numeric($ad_username)){      // check if both are not empty and username is not number

            if($ad_username === 'anjalee' && $password === 'it20658786'){

				header("location: http://localhost/master-food2/super_admin/index.php");             // redirect to the index page
				die;

			}else{    //  Not Super Admin


				// Read from database
				$query = "select * from admin where ad_username = '$ad_username' limit 1";     // select data query

				$result = mysqli_query($con, $query);          // run query and stor in result variable
	
				if($result){                                     // if result is succesfull
	
					if($result && mysqli_num_rows($result) > 0){          // if result is positive and num of rows greater than 0
	
						$user_data = mysqli_fetch_assoc($result);       // collect data from database
						
						if($user_data['password'] === $password){      // if userdata password equal to $password
							
							$_SESSION['succes'] = "Log in successful. You may now login to the site.";
							/*$_SESSION['id'] = $user_data['id']; */       // Now session id is equal to userdata id 
							header("location: http://localhost/master-food2/admin/index.php");             // redirect to the index page
							die;
						}else{
							$_SESSION['error'] = "Oops, wrong password..!";
							header("Location: admin_login.php");              // redirect to the index page
							die;
						}
					}else{
						$_SESSION['error'] = "Oops, wrong username..!";
						header("Location: admin_login.php");              // redirect to the index page
						die;
					}
	
				}

			}

            
        }else{
            $_SESSION['error'] = "Oops, invalid username or password..!";
            header("Location: admin_login.php");              // redirect to the index page
            die;
        }
    }



?>









<?php include("include/header(adminlogin).php"); ?>


	


<!-- Main content start-->
<section class="adminlogin-background">
		<div class="container">
			
			<div class="adminlogin">
				<!--Start admin login-->
				<form action="admin_login.php" method="POST">
					<h2>Master Food Admin Log In</h2>

                    <div style="background-color: #ffb8b8; color: #c23616; border-radius: 5px; padding-left: 15px;">

                        <?php
                            if(isset($_SESSION['error'])){

                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                        ?>
                    </div> <br>

					<label>Admin Name</label>
					<input type="text" name="ad_username" placeholder="Admin name">

					<label>Admin Password</label>
					<input type="password" name="password" placeholder="Admin password">
					<br>

					<button type="submit">Admin Log In</button>
					
					<a href="login.php" title="-login as normal user-" >User Log In</a>
				
					
				</form>
				<!--end sign up-->
			</div>

		</div>
	</section>
	<!-- Main content end-->





	<?php include("include/footer.php"); ?>