<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bshapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE form (
firstname VARCHAR(30) NOT NULL,

email VARCHAR(50),
msg VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table form created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>