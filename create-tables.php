<?php
include 'db-connection.php';

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
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  userType VARCHAR(30) NOT NULL,
  organization VARCHAR(50)
  )";
  if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
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

$sql = "CREATE TABLE Organizations (
    org_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Organizations created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


$sql = "CREATE TABLE Appeals (
    appeal_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    description VARCHAR(255) NOT NULL,
    organization VARCHAR(255) NOT NULL,
    status VARCHAR(20) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Appeals created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Contributions (
    contribution_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    value INT(20) NOT NULL,
    received_date timestamp
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table Contributions created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Disbursement(
  id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
  fullname VARCHAR(50) NOT NULL,
  date DATE NOT NULL,
  cash INT(100) NOT NULL,
  goods VARCHAR(255) NOT NULL
  )";
if ($conn->query($sql) === TRUE) {
  echo "Table Disbursement created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}





$sql = "INSERT INTO Users (username, password, userType, organization)
VALUES 
('John', 'password', 'Representative', 'Mercy'),
('Doe', 'password', 'Representative', 'UNICEF')";
if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Representatives (username, password, fullname, email, mobileNo, jobTitle, organization)
VALUES 
('John', 'password', 'John Doe', 'email', '1234', 'Senior', 'Mercy'),
('Doe', 'password', 'Jane Doe', 'email', '1234', 'Senior', 'UNICEF')";
if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
