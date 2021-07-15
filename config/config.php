<?php

// create variables
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "master_food";

// create connection
if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

     // check connection  
    die("failed to connect!");                                
}
    
?>