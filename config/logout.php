<?php

    session_start();

    if(isset($_SESSION['id'])){              // check seccion id is set or not

        unset($_SESSION['id']);              // unset session id
    }

    header("Location: ../index.php");          // redirect to the home page
    die;

?>