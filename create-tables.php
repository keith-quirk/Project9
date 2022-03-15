<?php
include 'db-connection.php';
$conn = OpenCon();
echo "Connected Successfully";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityzen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE User (
  username VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  fullname VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  mobileNo VARCHAR(10) NOT NULL,
  jobTitle VARCHAR(30) NOT NULL
  )";
if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Applicant (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(30) NOT NULL,
  idNo CHAR(4) NOT NULL,
  address VARCHAR(30) NOT NULL,
  houseIncome VARCHAR(30) NOT NULL,
  organization VARCHAR(30) NOT NULL
  )";
  if ($conn->query($sql) === TRUE) {
      echo "Table Users created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  
$sql = "CREATE TABLE Document (
  filename VARCHAR(50) NOT NULL,
  description VARCHAR(100) NOT NULL
  )";
if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "INSERT INTO User (username, password, fullname, email, mobileNo, jobTitle)
VALUES ('John', 'password', 'John Doe', 'john@email.com', '0123456789', 'Senior')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



CloseCon($conn);
?>