<?php
    // define database
    $host ="localhost";
    $server="root";
    $password ="";
    $dbname="student";

    // connect to db
    $connection = new mysqli($host,$server,$password,$dbname);
    // check connection 
    if($connection->connect_error){
        die("connection fail...".$connection->connect_error);
    }
    // else{
    //     // echo "connected to db";
    // }

?>
