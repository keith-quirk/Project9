<?php
include 'db-connection.php';
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
$sql = "CREATE TABLE Representatives (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  fullname VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  mobileNo VARCHAR(10) NOT NULL,
  jobTitle VARCHAR(30) NOT NULL,
  organization VARCHAR(100) NOT NULL
  )";
if ($conn->query($sql) === TRUE) {
    echo "Table Representatives created successfully";
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
      echo "Table Applicant created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  

$sql = "CREATE TABLE Users(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(50) NOT NULL,
  userType VARCHAR(30) NOT NULL
  )";
  if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


$sql = "CREATE TABLE Organization (
  orgID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  address VARCHAR(50) NOT NULL
  )";
  if ($conn->query($sql) === TRUE) {
    echo "Table Organizations created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Document (
  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(30),
  filename VARCHAR(50) NOT NULL,
  description VARCHAR(100) NOT NULL,
  image VARCHAR(255) NOT NULL
  )";
if ($conn->query($sql) === TRUE) {
    echo "Table Document created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "INSERT INTO Representatives (username, password, fullname, email, mobileNo, jobTitle, organization)
VALUES ('John', 'password', 'John Doe', 'john@email.com', '0123456789', 'Senior', 'Mercy')";

if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Users (fullname, userType)
VALUES ('John', 'Representative')";
if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>