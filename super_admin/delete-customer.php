<?php

    
    define('SETURL', 'http://localhost/master-food/');    

    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'master_food') or die(mysqli_error());

    echo $id = $_GET['id'];

    $sql = "DELETE FROM customer WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true){

        $_SESSION['delete'] = "Customer Deleted Successfully";
        header("location: http://localhost/master-food/super_admin/customer-details.php");
    }

?>