<?php 
include 'confiq.php';

$username = $_GET['usename'];
$password = $_GET['password'];

$sql = "INSERT INTO tugas_uas (id, usename, password) VALUES (NULL, '$usename', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}