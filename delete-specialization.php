<?php 
include "common/config.php";
$id = $_GET['id'];
$var = "DELETE FROM `specialization` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('SPECIALIZATION DELETED SUCCESSFULLY');window.location.href='view-specialization.php';</script>";
}
?>