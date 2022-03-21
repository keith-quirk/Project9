<?php
session_start();
include 'db-connection.php';

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$description = $_POST['description'];
$organization = $_SESSION["organization"];
$status = "Pending";
$sql = "INSERT INTO Appeals (start_date, end_date, description, organization, status)
VALUES ('$start_date', '$end_date', '$description', '$organization', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'new_appeal.php';</script>";   
    }
    else{
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'new_appeal.php';</script>";
        echo $sql->error;
    }


?>
