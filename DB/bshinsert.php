<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "bshapp";

// Create connection
$conn = new mysqli("$servername", "$username","$password","$dbname");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$firstname=$email=$msg="";


$firstname=$_POST["firstname"];
$email=$_POST["email"];
$msg=$_POST["msg"];



  $sql = "INSERT INTO form (firstname, email, msg)
  VALUES ('$firstname','$email','$msg')";
if ($conn->query($sql) === TRUE) header("Location:index.html") 
?>