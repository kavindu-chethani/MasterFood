<?php
include('../conection/connection1.php');



if(isset($_POST['registerbtn']))
{
    
    $memberid = $_POST['memberid'];
    $membername = $_POST['membername'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];

    $sql  = "INSERT INTO delivery_member(dm_id,dm_name,dm_address,dm_NIC,dm_number) VALUES ('$memberid','$membername','$address','$nic','$contact')";
        
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); 

    
  
    if(count($result) == 0)
    { 
      echo "data insert successfully";
      header('location:delivery-member.php');
    }
    else
    {
      echo "data not insert successfully";
    }

           
}



if(isset($_POST['updatebtn']))
{   

    $edit_dm_id = $_POST['edit_dm_id'];
    $edit_membername = $_POST['edit_membername'];
    $edit_address = $_POST['edit_address'];
    $edit_nic = $_POST['edit_nic'];
    $edit_contact = $_POST['edit_contact'];  


    $sql = "UPDATE delivery_member SET dm_name='$edit_membername', 
                                      dm_address='$edit_address',
                                      dm_NIC='$edit_nic',
                                      dm_number='$edit_contact'
                                      WHERE dm_id ='$edit_dm_id' ";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); 

    
  
    if(count($result) == 0)
    { 
      echo "data update successfully";
      header('location:delivery-member.php');
    }
    else
    {
      echo "data not update";
    }
   
}

if(isset($_POST['dm_id_delete_btn']))
{
    $dm_id_delete_id = $_POST['dm_id_delete_id'];

    $sql = "DELETE  FROM delivery_member WHERE dm_id ='$dm_id_delete_id'";

    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); 
    

    if(count($result) == 0)
    { 
      echo "Your Data i DELETED ";
      header('location:delivery-member.php');
    }
    else
    {
      echo  "Your Data is Not DELETED";
    }

}













?>