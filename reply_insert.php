<?php
include "connect.php";
$sql = "INSERT INTO comment (reply, user, ref)    
VALUES ('$_POST[reply]', '$_POST[user]', '$_GET[ref]') ";  // comment คือชื่อตารางที่จะบันทึก

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Refresh: 2; URL = reply.php?ref=$_GET[ref]");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>