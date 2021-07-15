<?php

session_start();

include("../connection/connection2.php");
include("../config/function.php");

$user_data = check_login($con);     // call check_login funtiion to check user is log or not

?>



<?php include("../include/header(frice).php"); ?>





    
    <div class="top" >
        <form>
            <h1 class="top_h1">FIND RESTAURANTS NEAR YOU</h1>
            <h5>Tasty food at your Door Step.Order your meals from Master Food</h5>
        </form>
    </div>

    <div class= "main-content">

    <form action = "../config/cat_load.php" method = "post">
        <div class="row">
            <div class="column">
              <div class="content">
                <img src="../images/food/frice1.jpg" class="images" alt="Food" style="width: 100%;">
                    <h3>MIHIRI Restaurant</h3>
                    <h4>LKR 400.00</h4><br>
                    <button class="order-btn" name ="Order_btn3a" type ="submit"><b>Order now</b></button>
              </div>
            </div>

            <div class="column">
                <div class="content">
                    <img src="../images/food/frice5.jpg" class="images" alt="Food" style="width: 100%;">
                    <h3>The Food Factory</h3>
                    <h4>LKR 500.00</h4><br>
                    <button class="order-btn" name ="Order_btn3b" type ="submit"><b>Order now</b></button>
                </div>
            </div>

            <div class="column">
                <div class="content">
                    <img src="../images/food/frice6.jpg" class="images" alt="Food" style="width: 100%;">
                    <h3>Restaurant FoodStuff</h3>
                    <h4>LKR 600.00</h4><br>
                    <button class="order-btn" name ="Order_btn3c" type ="submit"><b>Order now</b></button>
                </div>
            </div>


        </div>
     </form>
    </div>
    







<!--Footer Start-->


	<!-- social media start-->
	<div class="social">
            <div class="wrapper4">
                <ul class="social-links">
                    <li class="fa"><a href="#"><img src="../images/facebook.png"></a></li>
                    <li class="fa"><a href="#"><img src="../images/linkedin.png"></a></li>
                    <li class="fa"><a href="#"><img src="../images/twitter.png"></a></li>
                    <li class="fa"><a href="#"><img src="../images/whatsapp.png"></a></li>
					<li class="fa"><a href="#"><img src="../images/youtube.png"></a></li>
                </ul>
            </div>
        </div>
    <!-- social media end-->



	<!--footer items start-->
	<section class="footer">
		<div class="container text-center">
			<table>
				<tr>
					<th>Order Now</th>
					<th>About</th>
					<th>Policy</th>
					<th>My Master Food</th>
				</tr>

				<tr>
					<td><a href="#">PROMOS</a></td>
					<td><a href="#">CAREERS</a></td>
					<td><a href="#">THRMS & CONDITIONS</a></td>
					<td><a href="#">SIGN IN REGISTER</a></td>
				</tr>

				<tr>
					<td><a href="#">PIZZAS</a></td>
					<td><a href="#">ABOUT US</a></td>
					<td><a href="#">PRIVACY POLICY</a></td>
					<td></td>
				</tr>

				<tr>
					<td><a href="#">PASTAS</a></td>
					<td><a href="#">FEEDBACK</a></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><a href="#">APPETIZERS</a></td>
					<td><a href="#">HOTLINE</a></td>
					<td></td>
					<td></td>
				</tr>


				<tr>
					<td><a href="#">RICE</a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><a href="#">DESSERTS</a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td><a href="#">BEVERAGES</a></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>


			<p>@ 2021 Master Food, Inc. All rights reserved. The Master Food name, logos, and 
			related marks are trademarks of Mater Food, Inc. <br> Designed By <a href="#">Mission Impossible</a></p>


		</div>
	</section>
	<!--footer items end-->

<!--Footer End-->


	
</body>
</html>