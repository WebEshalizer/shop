<?php   
include('../config/db.php');
$id = $_GET['id'];
$delete = "delete from roles where id = '$id'";
$result = mysqli_query($conn, $delete);
if($result){
    echo "<script> location.replace('showrole.php')</script>";
};



?>