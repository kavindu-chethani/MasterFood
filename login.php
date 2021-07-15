<?php

    session_start();

    include("connection/connection2.php");
    include("config/function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){                          // if server request method equal to POST

        // something was posted
        $user_name = $_POST['user_name'];                             // collect data from form and store variable
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){      // check if both are not empty and username is not number

            // Read from database
            $query = "select * from customer where user_name = '$user_name' limit 1";     // select data query

            $result = mysqli_query($con, $query);          // run query and store in result variable

            if($result){                                     // if result succesfull

                if($result && mysqli_num_rows($result) > 0){          // if result is positive and num of rows greater than 0

                    $user_data = mysqli_fetch_assoc($result);       // collect data from database
                    
                    if($user_data['password'] === $password){      // if userdata password equal to $password
                        
                        $_SESSION['succes'] = "Log in successful. You may now login to the site.";
                        $_SESSION['id'] = $user_data['id'];        // Now session id is equal to userdata id 
                        header("Location: category.php");              // redirect to the category page
                        die;
                    }else{
                        $_SESSION['error'] = "Oops, wrong password..!";
                        header("Location: login.php");              // redirect to the login page
                        die;
                    }
                }else{
                    $_SESSION['error'] = "Oops, wrong username..!";
                    header("Location: login.php");              // redirect to the login page
                    die;
                }

            }

            
        }else{
            $_SESSION['error'] = "Oops, invalid username or password..!";
            header("Location: login.php");              // redirect to the login page
            die;
        }
    }



?>
















<?php include("include/header(login).php"); ?>


	


<!-- Main content start-->
<section class="login-background">
		<div class="container">
			
			<div class="login">
				<!--Start sign up-->
				<form action="login.php" method="POST">
					<h2>User Log In</h2>

                    <div style="background-color: #b8e994; color: #009432; border-radius: 10px; padding-left: 15px;">
        				<?php
            				if(isset($_SESSION['reg-succes'])){       // registration succesfull message 

                				echo $_SESSION['reg-succes'];
                				unset($_SESSION['reg-succes']);
            				}
        				?>   
    				</div>
					
					
					<div style="background-color: #ffb8b8; color: #c23616; border-radius: 5px; padding-left: 15px;">
						<?php
                            if(isset($_SESSION['error'])){         // log in error message

                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                        ?>
                    </div>

					<br>

					<label>User Name</label>
					<input type="text" name="user_name" placeholder="User name">

					<label>Password</label>
					<input type="password" name="password" placeholder="Password">
					<br>

					<button type="submit">Log In</button>
					
					<a href="signup.php">Create new account</a>
					<br>
					<a href="admin_login.php" title="-Only master-food admin can access this page-" >Admin Log In</a>
					
				</form>
				<!--end sign up-->
			</div>

		</div>
	</section>
	<!-- Main content end-->






<?php include('include/footer.php'); ?>