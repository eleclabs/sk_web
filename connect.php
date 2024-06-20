<?php
$servername = "localhost";
$username = "root"; 
$password = "";  //ใน xampp ไม่ต้องระบุ password
$dbname = "db1"; //กำหนดชื่อฐานข้อมูล

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>