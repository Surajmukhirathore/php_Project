<?php 
include "common/config.php";
$id = $_GET['id'];
$var = "DELETE FROM `member` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('MEMBER DELETED SUCCESSFULLY');window.location.href='member.php';</script>";
}
?>