<?php 
include "common/config.php";
$id = $_GET['id'];
$var = "DELETE FROM `membership` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('MEMBERSHIP DELETED SUCCESSFULLY');window.location.href='view-membershiplist.php';</script>";
}
?>