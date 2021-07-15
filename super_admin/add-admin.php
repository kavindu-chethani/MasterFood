<?php


    if(isset($_POST['submit'])){

        $ad_name = $_POST['ad_name'];
        $ad_username = $_POST['ad_username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO admin SET ad_name='$ad_name', ad_username='$ad_username', password='$password'";

        $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
        $db_select = mysqli_select_db($conn, 'master_food') or die(mysqli_error());

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        header("location: http://localhost/master-food2/super_admin/index.php");

        
    }


?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addadmin.css">
    <title>Super Admin</title>
</head>
<body>



<!-- Main content start-->
<section class="addadmin-background">
		<div class="container">
			
			<div class="addadmin">
				<!--Start add admin -->
				<form action="" method="POST">
					<h2>Master Food Add Admin</h2>

					<label>Admin Name</label>
                    <input type="text" name="ad_name" placeholder="Admin name">

                    <label>Admin User Name</label>
                    <input type="text" name="ad_username" placeholder="Admin user name">

                    <label>Admin Password</label>
                    <input type="password" name="password" placeholder="Admin password">
                    <br>

                     <!--<button type="submit">Add Admin</button>-->
                    <input type="submit" name="submit" value="Add Admin" class="btn-sec">
				
					
				</form>
				<!--end sign up-->
			</div>

		</div>
	</section>
<!-- Main content end-->



					
			
					
</form>
<!--end add admin-->
    
</body>
</html>