<?php
include "connect.php";
$sql = "INSERT INTO blog (title, content, poster, dmy)    
VALUES ('$_POST[title]', '$_POST[content]', '$_POST[poster]', now())";  // blog คือชื่อตารางที่จะบันทึก

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Refresh: 2; URL = blog_view.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>