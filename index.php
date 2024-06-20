<?php
  ob_start();
  session_start();

  if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
  }

  echo"Hi";

?>