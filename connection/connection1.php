<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=master_food;','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);	
    // var_dump("connection successed");	
}

catch(PDOException $e)
{
    var_dump($e);
}


?>