<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db1_gym';

$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
  echo "error";
}
?>