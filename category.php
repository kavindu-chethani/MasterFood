
<?php

session_start();

include("connection/connection2.php");
include("config/function.php");

$user_data = check_login($con);     // call check_login funtiion to check user is log or not

?>




<?php include("include/header(category).php"); ?>



        <form action = "config/cat_load.php" method ="post">
         <div class="top" >
            <div class = "search-box">
                <input type ="text" name = "search" class="search-field" placeholder="What are you craving?">
                <button class="search-btn" name = "search_btn" type ="submit">Search</button>
            </div>
         </div>
        </form>

    
      
    <div class= "main-content">
      <form action = "config/cat_load.php" method = "post">
        <div class="row">
            <div class="column">
              <div class="content">
                <img src="images/food/rice1.jpg" class="images" alt="Food" style="width:100%" >
                <h3>Rice and Curry</h3>
                <h4>LKR 250.00 - LKR 650.00</h4><br>
                <p>Sri Lankan special Rice and Curries. Served with special rice bowl and Sri Lankan style chili paste.</p>
                <button class="next-btn" name = "view_btn1" type ="submit"><b>View More</b></button>
              </div>
            </div>

            <div class="column">
                <div class="content">
                  <img src="images/food/koththu2.jpg" class="images" alt="Food" style="width:100%">
                  <h3>Kottu</h3>
                  <h4>LKR 400.00 - LKR 800.00</h4><br>
                  <p>Sri Lankan special Kottu with chicken, eggs and chili paste. Served with spicy Asian sauces.</p>
                  <button class="next-btn" name = "view_btn2" type ="submit"><b>View More</b></button>
                </div>
            </div>

            <div class="column">
                <div class="content">
                  <img src="images/food/frice1.jpg" class="images" alt="Food" style="width:100%">
                  <h3>Fried Rice</h3>
                  <h4>LKR 400.00 - LKR 800.00</h4><br>
                  <p>Sri Lankan special Fried Rice with grilled chicken, chili paste and tomato ketchup.</p>
                  <button class="next-btn" name = "view_btn3" type ="submit"><b>View More</b></button>
                </div>
            </div>

            <div class="column">
                <div class="content">
                  <img src="images/food/sandwich1.jpg" class="images" alt="Food" style="width:100%">
                  <h3>Sandwiches</h3>
                  <h4>LKR 200.00 - LKR 600.00</h4><br>
                  <p>Special chicken sandwiches, fish sandwiches, vegetable sandwiches with cassava chips</p>
                  <button class="next-btn" name = "view_btn4" type ="submit"><b>View More</b></button>
                </div>
            </div>

            <div class="column">
                <div class="content">
                  <img src="images/food/pizza4.jpg" class="images" alt="Food" style="width:100%">
                  <h3>Pizza</h3>
                  <h4>LKR 800.00 - LKR 1800.00</h4><br>
                  <p>Chicken, Cheesy and Other flavored pizzas available with medium and large sizes.</p>
                  <button class="next-btn" name = "view_btn5" type ="submit"><b>View More</b></button>
                </div>
            </div>

            <div class="column">
                <div class="content">
                  <img src="images/food/burger2.jpg" class="images" alt="Food" style="width:100%">
                  <h3>Burgers</h3>
                  <h4>LKR 320.00 - LKR 650.00</h4><br>
                  <p>Large, medium and small size of burgers with chicken patties and cheese layer.</p>
                  <button class="next-btn" name = "view_btn6" type ="submit"><b>View More</b></button>
                </div>
            </div>


        </div>
      </form>  
    </div>


    <?php include('include/footer.php'); ?>  

