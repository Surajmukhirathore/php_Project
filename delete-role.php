<?php 
include "common/config.php";
$id = $_GET['id'];
$var = "DELETE FROM `role` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('ROLE DELETED SUCCESSFULLY');window.location.href='view-role.php';</script>";
}
?>