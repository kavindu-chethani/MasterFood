<?php

session_start();
include('../connection/connection1.php');

if(isset($_POST['search_btn']))
{
    $search = $_POST['search'];

    try{
          $sql = "SELECT * FROM available_cities WHERE cities LIKE '%$search%'";

          $stmt = $db->prepare($sql);   //  database connectivity checking
          $stmt->execute();
          $result = $stmt->fetchAll(); 

          if(count($result) == 0)
          { 
            $_SESSION['success'] = "Enter Valid city";
            header('Location: ../index.php');
          }
          else
          {
             header('Location: ../login.php');
             
          }
        }
    catch( PdoException $e){       // error handling
          echo $e;
    }
}








if(isset($_POST['updatebtn']))
{   
 
    $user_id = $_POST['id'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $email = $_POST['edit_email'];
    $address = $_POST['edit_address'];
    $contactno = $_POST['edit_contactno'];
    $username = $_POST['edit_username'];
    $password = $_POST['edit_password'];


    $sql = "UPDATE customer SET first_name='$fname', last_name='$lname', email='$email', address='$address', contact_number='$contactno', user_name='$username',password='$password'  WHERE id ='$user_id' ";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); 

    
  
    if(count($result) == 0)
    { 
      echo "data update successfully";
    }
    else
    {
      echo "data not update";
    }
   
}


?>

