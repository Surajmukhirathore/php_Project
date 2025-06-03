<?php 
include "common/config.php";
$id = $_GET['group_id'];
$var = "DELETE FROM `group` WHERE id=$id ";
$run = mysqli_query($conn, $var);
if($run){
    echo "<script>alert('GROUP DELETED SUCCESSFULLY');window.location.href='view-group.php';</script>";
}
?>