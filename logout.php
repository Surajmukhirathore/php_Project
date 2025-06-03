<?php session_start();
session_unset();
session_destroy();

echo "<script>alert('admin logout successfully');window.location.href='signin.php';</script>";
?>