
<?php 
    // echo 'echo something';
    // include_once "config.php";
    // include "config.php";
    // echo "<br>";
    // include "config.php";
    // echo "<br>";
    // include "config.php";

    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
    // include_once "config.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
    <style>
        form{
            background-color: whitesmoke;
            padding: 10px;
            width: 50%;
            
        }
        input{
            display: block;
            width: 100%;
            padding: 10px;
        }
        input[type=submit]{
            background-color: green;
        }
    </style>
</head>
<body>

    <form action="add.php" method="POST">
        <h1>Fill the Information Bellow</h1>
        <label for="name">Name</label>
        <input type="text" name="username" required />
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    
</body>
</html>