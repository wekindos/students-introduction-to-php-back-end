<?php
    // include configuration file config.php
    include_once "config.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email =$_POST['email'];
        $password =$_POST['password'];

        // insert info to db
        $sql ="INSERT INTO users(username,email,password)
         VALUES ('$username','$email','$password')";
        //  
        $connection-> query($sql);
        // echo 'fnnsk';
        header('location: view.php');

    }


?>