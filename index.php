<?php

    session_start();

    include("connection/connection2.php");
    include("config/function.php");

	/*$user_data = check_login($con);*/     // call check_login funtiion to check user is log or not
    
?>

<?php include("include/header(homepage).php"); ?>



<!--***************** Main Content Start ***********************-->

<!--First Slid-->
<div class="main-content">
	<div class="wrapper3">
		<div id="nova">
			<p class="intro">Master Food</p>
			<p class="intro">The Srilankan Best Food Delivery website</p>
				<?php
				if(isset($_SESSION['success']) && $_SESSION['success'] !='' )    // Error handling
				{
					echo '<h2 style="color:red">'.$_SESSION['success'].' </h2>';
					unset($_SESSION['success']);
				}
				?>
			<form class="search" action="config/code.php"  method="POST">
			  <input type="text" name="search" placeholder="Enter Your City">
			  <button type="submit" name="search_btn">Search</i></button>
			</form> 
		  </div>
	</div> 
</div>
<!--First Slid-->





<!--About Us-->     
<section id="about1">
	<div class="container1">
	<div class="row1">
	<h2 class="new">About Us</h2>
	<div class="row">
		<div class="col-md-6">
		<h2>Master food</h2>
		<br>
		<p class="about_txt">
			For us, it's not just about bringing you good food from your favourite restaurants. 
			<br><br> It's about making a connection, which is why we sit down with the chefs, dreaming up 
			<br><br> menus that will arrive fresh and full of flavour. 
			<br><br>Try us! 
	   </p>
		</div>
		<div class="col-md-6">
		<img class="about_img" src="images/02.jpg" >
		</div>
	</div>
	</div>
</section> 
<!--About Us-->




<!-- free space -->
<div id="services_new">
	<div >
		
	</div>
</div>
<!-- free space -->



<!--contact us-->
<section  id="Contact"> 
	<div  class="container3">
		 <h2> Contact Us</h2>
		 <div class="row">
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.38745368116!2d80.51513867570667!3d5.956908256312097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f32875086f7%3A0x49ea6fee1f28d44b!2sGabadaweediya%2C%20Matara!5e0!3m2!1sen!2slk!4v1620192070486!5m2!1sen!2slk" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<ul>
				  <li><p style="color:black; font-family:verdana"><i class="fa fa-map-marker" aria-hidden="true">	243/3 dharmawnsha road matara</i></p></li>
				  <li><p style="color:black; font-family:verdana"><i class="fa fa-phone" aria-hidden="true">	0716773245</i></p></li>
				  <li><p style="color:black; font-family:verdana"><i class="fa fa-envelope" aria-hidden="true">	nawarathnanavod@gmail.com</i></p></li>
				</ul>
			 </div>  
			 <div class="col-md-6">
			<form action="">
				<label for="fname">Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
				<label for="lname">Email</label>
				<input type="text" id="lname" name="lastname" placeholder="Your email..">
				<label for="lname">Address</label>
				<input type="text" id="lname" name="lastname" placeholder="Your address..">
				<label for="subject">Message</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
				<input type="submit" value="Submit">
			</form>
			</div>  
		 </div>
	</div>
</section>
<!--contact us-->

<!--***************** Main Content End ***********************-->




<?php include("include/footer.php"); ?>

