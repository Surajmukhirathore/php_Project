<?php
session_start();
session_destroy();
header("Location: login-attendance.php"); // Change accordingly
exit();
