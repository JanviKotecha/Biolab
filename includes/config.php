<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "biolabs";

  $conn = mysqli_connect($host, $username, $password, $db);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
?>