<?php

$host = 'localhost';
$name = 'root';
$password = '';
$dbname = 'ecommerce';
// $port = "3307";  


$conn = mysqli_connect($host,$name,$password,$dbname);
if(!$conn){
    echo "Database not connected" . mysqli_connect_error();
} 
// else{
// echo "Database connected";
// }


?>