<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Master Food</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/admin_login.css">
	<link rel="stylesheet" href="css/footer.css">
</head>
<body>




<!--Navbar Start-->

<section class="navbar">
	<div class="container">

		<div class="logo">
			<a href="#" title="Logo"><img src="images/Master.png" alt="Master Food Logo" class="img-responsive"></a>
		</div>


		<!--two buttons start-->
		<div class="main-content1">
            <div class="wrapper1">
                <div class="btn">

                    <!--customer buttons-->
					<div class="dropdown">

						<!--customer buttons interface-->
                        <button class="dropbtn">
						    <?php if(isset( $user_data['user_name'])){
                                    echo  $user_data['user_name'];
                                }else{
                                    echo "Customer";
                                }  
                            ?>
                            
						</button>

                        <div class="dropdown-content">
                          <a href="login.php">Log In</a>
                          <a href="config/logout.php">Log Out</a>
                          <a href="signup.php">Registration</a>
						  <a href="editprofile.php">Edit Profile</a>
                        </div>
                        
                    </div>
					
					<!--order buttons-->
                    <div class="btn-group">
                        <button>Your order</button>
                    </div>

                </div>
            </div>
        </div>  
		<!--two buttons end-->


		<!--navbar items start-->
		<div class="menu text-right">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#Contact">Contact Us</a></li>
				<li><a href="#about1">About Us</a></li>
				<li><a href="category.php">Category</a></li>
					
			</ul>
		</div>
		<!--navbar items end-->

		<div class="clearfix"></div>

	</div>
</section>

<!--Navbar end-->