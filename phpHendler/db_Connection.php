<?php

try{
    define('username', 'root');
    define('password', 'sam02');
    $db_con= new PDO('mysql:host=localhost;dbname=taxi_recording',username,password);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    //echo'succssesiful';
}catch(PDOException $ex){
    die('connection fail'.$ex->getMessage());
}
?>