<?php   
include('../config/db.php');
$id = $_GET['id'];
$delete = "delete from category where id = '$id'";
$result = mysqli_query($conn, $delete);
if($result){
    echo "<script> location.replace('showcategory.php')</script>";
}



?>