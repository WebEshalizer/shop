<?php   
include('../config/db.php');
$id = $_GET['id'];
$delete = "delete from register where user_id  = '$id'";
$result = mysqli_query($conn, $delete);
if($result){
    echo "<script> location.replace('showregister.php')</script>";
}



?>