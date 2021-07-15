
<?php
session_start();
include("connection/connection2.php");
include("config/function.php");
$user_data = check_login($con);     // call check_login funtiion to check user is log or not
?>

<?php include("include/header(billing_information).php"); ?>

<?php 

//load the each pages to radio button option
if(isset($_POST['payment']) && ($_POST['payment']) == "card_payment"){

header("Location: card_payment.php"); 
}

elseif(isset($_POST['payment']) && ($_POST['payment']) == "cash_payment")
{
   header("Location: payment_success.php"); 
}

?>

<!--fetch data from database to load customer details to the form-->

<div id="box" class="form_one">
    <h2>Billing information</h2>
    <h3>Customer details</h3>

        <form  method="post"  action="billing_information.php">
             
            <label for="id">Customer id</label><br>
            <input  type="text" name="id" value='<?php echo $user_data['id']?>'><br><br>

            <label for="name">Customer name</label><br>
            <input   type="text" name="name" value='<?php echo $user_data['user_name']?>'><br><br>

            <label for="address">Address</label><br>
            <input  id="text" type="text" name="address" value='<?php echo $user_data['address']?>'></input><br><br>

            <label for="contact_no">Contact no</label><br>
            <input  id="text" type="text" name="contact_no" value='<?php echo $user_data['contact_number']?>'></input><br><br>
        
        </form>
</div>
<?php

//fetch data from database to load order details to the form
$k = $user_data['id'];
$query="select * from order_details where order_id= $k";

$result=mysqli_query($con, $query);

while($row=mysqli_fetch_assoc($result)){  
?>

<div id="box" class="form_one">
    <h2>Order details</h2>
    <form  method="post"  action="billing_information.php">
            <label for="id">Order no</label><br>
            <input id="text" type="text" name="orderid"  value='<?php echo $row['order_id']?>'><br><br>

            <label for="card_payment">food name</label><br>
            <input id="text" type="text" name="item_name" value='<?php echo $row['food_name']?>'><br><br>
           
            <label for="description">Restaurant name</label><br>
            <input id="text" type="text" name="restaurant_name" value='<?php echo $row['restaurant_name']?>'><br><br>
     </form>
</div>

<?php
}

//calculate total price in order and display the data in the form
$query="select food_price ,delivery_charge, SUM(food_price * quantity+250) as Total from order_details where order_id= $k ";

$result=mysqli_query($con, $query);

$row=mysqli_fetch_assoc($result);

?>

<div id="box" class="form_one">

    <h2>Invoice</h2>
        <form  method="post"  action="billing_information.php">

            <label for="order_Price" >Order price</label><br>
            <input id="text" type="text" name="price" value='RS.<?php echo $row['food_price']?>'><br><br>

            <label for="delivery_fees">Delivery fees</label><br>
            <input id="text" type="text" name="delivery_charge" value='RS.<?php echo '250'; ?>'><br><br>
			
            <label for="total_price">Total price</label><br>
            <input id="text" type="text" name="Total_price" value='RS.<?php echo $row['Total']?>'><br><br>
            
        </form>
</div>

<!--select payment method using radio buttons and submit-->
<div id="box" class="form_three">
<h2>Select payment method</h2>
    <form action="" method="post" >
            <input type="radio" id="card_payment" name="payment" value="card_payment"><a href="card_payment.php"></a></input>
            <label for="card_payment">card payment</label><br>
            <input type="radio" id="cash_on_delivery" name="payment" value="cash_payment"><a href="payment_success.php"></a></input>
            <label for="cash_payment">cash on delivery</label><br>
            <button id="button" type="submit" value="submit" styles="width: 25%; background-color: #c7680f; color: white; padding: 5px 5px; 
            margin: center;border: none;border-radius: 4px;cursor: pointer;margin-left: 150px;">Submit</button><br><br>
    </form>
</div> 
<br><br>






<?php include('include/footer.php'); ?> 