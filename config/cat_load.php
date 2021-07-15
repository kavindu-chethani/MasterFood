<?php
include ('../connection/connection2.php');

       //order button

        if(isset($_POST["Order_btn1a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 400 WHERE f_id = 1";
          $con->query($sql);
          header("Location:../order/order_page1.php");
        }
        elseif(isset($_POST["Order_btn1b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 500 WHERE f_id = 1";
          $con->query($sql);
          header("Location:../order/order_page1.php");
        }
        elseif(isset($_POST["Order_btn1c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 600 WHERE f_id = 1";
          $con->query($sql);
          header("Location:../order/order_page1.php");
        }
        elseif(isset($_POST["Order_btn1d"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant Homey Meals', price = 800 WHERE f_id = 1";
          $con->query($sql);
          header("Location:../order/order_page1.php");
        }
        else{
            echo"Loading failed";
        }




        if(isset($_POST["Order_btn2a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 400 WHERE f_id = 2";
          $con->query($sql);
          header("Location:../order/order_page2.php");
        }
        elseif(isset($_POST["Order_btn2b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 500 WHERE f_id = 2";
          $con->query($sql);
          header("Location:../order/order_page2.php");
        }
        elseif(isset($_POST["Order_btn2c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 600 WHERE f_id = 2";
          $con->query($sql);
          header("Location:../order/order_page2.php");
        }
        else{
            echo"Loading failed";
        }






        if(isset($_POST["Order_btn3a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 400 WHERE f_id = 3";
          $con->query($sql);
          header("Location:../order/order_page3.php");
        }
        elseif(isset($_POST["Order_btn3b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 500 WHERE f_id = 3";
          $con->query($sql);
          header("Location:../order/order_page3.php");
        }
        elseif(isset($_POST["Order_btn3c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 600 WHERE f_id = 3";
          $con->query($sql);
          header("Location:../order/order_page3.php");
        }
        else{
            echo"Loading failed";
        }







        if(isset($_POST["Order_btn4a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 400 WHERE f_id = 4";
          $con->query($sql);
          header("Location:../order/order_page4.php");
        }
        elseif(isset($_POST["Order_btn4b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 500 WHERE f_id = 4";
          $con->query($sql);
          header("Location:../order/order_page4.php");
        }
        elseif(isset($_POST["Order_btn4c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 600 WHERE f_id = 4";
          $con->query($sql);
          header("Location:../order/order_page4.php");
        }
        else{
            echo"Loading failed";
        }







        if(isset($_POST["Order_btn5a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 800 WHERE f_id = 5";
          $con->query($sql);
          header("Location:../order/order_page5.php");
        }
        elseif(isset($_POST["Order_btn5b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 900 WHERE f_id = 5";
          $con->query($sql);
          header("Location:../order/order_page5.php");
        }
        elseif(isset($_POST["Order_btn5c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 1200 WHERE f_id = 5";
          $con->query($sql);
          header("Location:../order/order_page5.php");
        }
        else{
            echo"Loading failed";
        }





        if(isset($_POST["Order_btn6a"])){
            
          $sql = "UPDATE food SET restaurant = 'Mihiri Restaurant', price = 400 WHERE f_id = 6";
          $con->query($sql);
          header("Location:../order/order_page6.php");
        }
        elseif(isset($_POST["Order_btn6b"])){
            
          $sql = "UPDATE food SET restaurant = 'The Food Factory', price = 500 WHERE f_id = 6";
          $con->query($sql);
          header("Location:../order/order_page6.php");
        }
        elseif(isset($_POST["Order_btn6c"])){
            
          $sql = "UPDATE food SET restaurant = 'Restaurant FoodStuff', price = 600 WHERE f_id = 6";
          $con->query($sql);
          header("Location:../order/order_page6.php");
        }
        else{
            echo"Loading failed";
        }








        // view button

        if(isset($_POST["view_btn1"])){
            
          
          $sql = "UPDATE food SET f_name = 'Rice and Curry', restaurant = 'null', price = 0 WHERE f_id = 1";
          $con->query($sql); 
          header("Location:../food/rice.php");
        }
        elseif(isset($_POST["view_btn2"])){
          
          $sql = "INSERT INTO food(f_id, f_name, restaurant, price) VALUES (2, 'Kottu', 'null',0)";
          $con->query($sql);
          header("Location:../food/koththu.php");
        }
        elseif(isset($_POST["view_btn3"])){
            
          $sql = "INSERT INTO food(f_id, f_name, restaurant, price) VALUES (3, 'Fried Rice', 'null',0)";
          $con->query($sql);
          header("Location:../food/frice.php");
        }
        elseif(isset($_POST["view_btn4"])){
            
          $sql = "INSERT INTO food(f_id, f_name, restaurant, price) VALUES (4, 'Sandwiches', 'null',0)";
          $con->query($sql);
          header("Location:../food/sandwich.php");
        }
        elseif(isset($_POST["view_btn5"])){
            
          $sql = "INSERT INTO food(f_id, f_name, restaurant, price) VALUES (5, 'Pizza', 'null',0)";
          $con->query($sql);
          header("Location:../food/pizza.php");
        }
        elseif(isset($_POST["view_btn6"])){
            
          $sql = "INSERT INTO food(f_id, f_name, restaurant, price) VALUES (6, 'Burgers', 'null',0)";
          $con->query($sql);
          header("Location:../food/burger.php");
        }
        else{
            echo"Loading failed";
        }
 

        // search button

        if(isset($_POST['search_btn']))
        {
          $search = $_POST['search'];

          if($search == "Rice and Curry" || $search == "rice and curry" || $search == "Rice" || $search == "rice" ){
            header('Location:../food/rice.php');
          }
          elseif($search == "Kottu" || $search == "kottu" ){
            header('Location:../food/koththu.php');
          }
          elseif($search == "Fried Rice"|| $search == "fried rice"){
            header('Location:../food/frice.php');
          }
          elseif($search == "Sandwiches" || $search == "sandwiches"){
            header('Location:../food/sandwich.php');
          }
          elseif( $search == "Pizza" || $search == "pizza"){
            header('Location:../food/pizza.php');
          }
          elseif($search == "Burgers"|| $search == "burgers"|| $search == "Burger"|| $search == "burger")
          header('Location:../food/burger.php');
          } 
          else{
            echo "invalid fooditem";
          }

           // order_details submition

           // assigning values
         if(isset($_POST['submit1_btn'])){
           if(!empty($_POST['quantity'])){
             $k = $user_data['id'];
             $fname = $_POST['foodname'];
             $rname = $_POST['restaurantname'];
             $fprice = $_POST['foodPrice'];
             $quantity = $_POST['quantity'];
             $note = $_POST['addNote'];

             // query creating and passing
             $query = "insert into order_details(order_id, food_name, restaurant_name, food_price, quantity, note)
              values ('$k','$fname','$rname','$fprice','$quantity','$note')";

            $run = mysqli_query($con, $query)  or die(mysqli_error());

            if($run){
              //echo "Order submitted Successfully";
              header("Location: ../billng_information.php");
            }
            else{
              echo "form not submitted";
            }
           }
           else{
             echo "quantity required";
           } 
         }
          
        ?>

        