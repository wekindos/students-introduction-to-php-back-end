<?php
// code here
include_once 'config.php';

// to select all info in db

$sql= "SELECT * FROM users ";

$result = $connection->query($sql);

if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        echo '<tr>';
        echo "<td>".$rows['username']."</td>";
        echo "<td>".$rows['email']. "</td>";
        echo "<td>".$rows['password']. "</td>";
        echo '<td> <button>Edit</button> <button>Delete</button> </td>';
        echo '</tr>';

    }
}


?>