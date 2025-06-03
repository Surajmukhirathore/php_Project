<?php
session_start();
if (!isset($_SESSION["attendance_user"])) {
  header("Location: login-attendance.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Attendance Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION["attendance_user"]; ?></h1>
  <a href="logout.php">Logout</a>
</body>
</html>
