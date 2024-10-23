<?php   
include('../config/db.php');
$id = $_GET['id'];
$delete = "delete from product where product_id  = '$id'";
$result = mysqli_query($conn, $delete);
if($result){
    echo "<script> location.replace('showproduct.php')</script>";
};