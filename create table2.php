<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE new_record (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
trn_date timestamp,
name VARCHAR(30) NOT NULL,
age INT(3) NOT NULL,
submittedby VARCHAR(30) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table new_record created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>