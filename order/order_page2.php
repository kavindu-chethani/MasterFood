
<?php

session_start();

include("../connection/connection2.php");
include("../config/function.php");

$user_data = check_login($con);     // call check_login funtiion to check user is log or not

?>


<?php

  $sql = "SELECT f_name, restaurant, price FROM food WHERE f_id = 2";

  $result = $con->query($sql);
  $row = $result->fetch_assoc();

?>






<?php include("../include/header(orderpage).php"); ?>
  



  <form method = "post" action = "../config/cat_load.php">
  <form method ="post" action ="order_page.php">
    <label class="lbl" for="fdname">Food Name<br></label>
    <input class="textBx" type="text" name="foodname" value = '<?php echo $row['f_name']?>'>
     <br>
    <label class="lbl" for="restaurant">Restaurant Name<br></label>
    <input class="textBx" type="text" name="restaurantname" value = '<?php echo $row['restaurant']?>'>
     <br>
     <label class="lbl" for="foodPrice">Food Price<br></label>
    <input class="textBx" type="text" name="foodPrice" value = '<?php echo $row['price']?>'>
     <br>
     <label class="lbl" for="quantity">Quantity<br></label>
    <input class="textBx" type="text" name="quantity" placeholder="Add quantity" >
     <br>
    <label class="lbl" for="addNote">Add a Note<br></label>
    <input class="textBx" type="text" name="addNote" placeholder="Add your note..." style="height:60px;">
    <br>
    
      <input class="submit_btn" type="submit" name="submit1_btn" value="Submit" >
   </form>
  </form>











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
 

