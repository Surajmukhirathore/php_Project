<?php 
include "common/config.php";
$id = $_GET['id'];
$var = "DELETE FROM `staff_member` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('STAFF DELETED SUCCESSFULLY');window.location.href='view-staff.php';</script>";
}
?>