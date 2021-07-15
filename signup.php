<?php
    session_start();     // start the session

        include("connection/connection2.php");        // connect database
        include("config/function.php");   

        if($_SERVER['REQUEST_METHOD'] == "POST"){     // if server request method equal to POST

            // something was posted
            $first_name = $_POST['first_name'];     // collecting data from form and store variable
            $last_name = $_POST['last_name'];
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $contact_number = $_POST['contact_number'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            $con_password = $_POST['con_password'];

            if(!is_numeric($first_name) && !is_numeric($last_name) && !is_numeric($user_name)){   // check if username is not number

                // check db for existing user with same username
				$query = "select * from customer where user_name = '$user_name' limit 1";

				$result = mysqli_query($con, $query);
				
				if($result){

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['user_name'] != $user_name){

						if($password === $con_password){

							// save to database
							$query = "insert into customer (first_name, last_name, user_name, email, contact_number, 
							address, password, con_password)
							values ('$first_name', '$last_name', '$user_name', '$email', '$contact_number', 
							'$address', '$password', '$con_password')";      // insert data query
		   
						   mysqli_query($con, $query);        // run query
		   
						   $_SESSION['reg-succes'] = "Registration successful. please enter your details.";
						   header("Location: login.php");     // redirect to login page
						   die;

						}else{
							$_SESSION['reg-error'] = "Oops, Password not match..!";
						   header("Location: signup.php");     // redirect to sign up page
						   die;
						}
					}else{
						$_SESSION['reg-error'] = "Oops, your user name already exist..!";
						header("Location: signup.php");     // redirect to sign up page
						die;
					}
				}
				
            }else{
                $_SESSION['reg-error'] = "Oops, please enter some valid first name, last name or user name..!";
				header("Location: signup.php");     // redirect to sign up page
				die;
            }
        }




?>







<?php include("include/header(signup).php"); ?>





<!-- Main content start-->
	<section class="signup-background">
		<div class="container">
			
			<div class="signup">
				<!--Start sign up-->
				<form action="signup.php" method="POST">
					<h2>SIGN UP</h2>

					<div style="background-color: #ffb8b8; color: #c23616; border-radius: 5px; padding-left: 15px;">

                        <?php
                            if(isset($_SESSION['reg-error'])){           // registration error message

                                echo $_SESSION['reg-error'];
                                unset($_SESSION['reg-error']);
                            }
                        ?>
                    </div>

					<br>

					<label>First Name</label>
					<input type="text" name="first_name" placeholder="First name" required>

					<label>Last Name</label>
					<input type="text" name="last_name" placeholder="Last name" required>

					<label>User Name</label>
					<input type="text" name="user_name" placeholder="User name" required>

					<label>Email</label>
					<input type="email" name="email" placeholder="Email" required>

					<label>Contact Number</label>
					<input type="text" name="contact_number" placeholder="Contact number" required>

					<label>Address</label>
					<input type="text" name="address" placeholder="Address" required>

					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required>

					<label>Confirm Password</label>
					<input type="password" name="con_password" placeholder="Confirm Password" required>

					<br>

					<button type="submit" name="submit">Sign Up</button>

					<a href="login.php">Already have account</a>
				</form>
				<!--end sign up-->
			</div>

		</div>
	</section>
<!-- Main content end-->





<?php include("include/footer.php"); ?>