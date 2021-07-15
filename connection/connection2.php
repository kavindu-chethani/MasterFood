<?php

// Create database connection 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "master_food";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){      // connect database to variable call "con"

    die("failed to connect!");                                       // if not connect database, stop processing and display error msg
}