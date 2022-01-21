<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "biolabs";

  // $host = "localhost";
  // $username = "u460357818_covidtesting";
  // $password = "Covid19Testing";
  // $db = "u460357818_biolink";
  $conn = mysqli_connect($host, $username, $password, $db);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
?>