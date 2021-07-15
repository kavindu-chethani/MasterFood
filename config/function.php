<?php

function check_login($con){                     // implement check_login function

    if(isset($_SESSION['id'])){            // if session id is set in database

        $id = $_SESSION['id'];             // session id is equal to $id 
        $query = "select * from customer where id = '$id' limit 1";       // create query to get all data from database

        $result = mysqli_query($con,$query);         // read query (run query)

        if($result && mysqli_num_rows($result) > 0){         // if result is positive and num of rows greater than 0

            $user_data = mysqli_fetch_assoc($result);       // collect data from database
            return $user_data;                           // return user_data
        }
    } // redirect to login

    header("Location: index.php");
    die;
}


