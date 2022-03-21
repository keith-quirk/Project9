<?php
session_start();
include 'db-connection.php';

$date = $_POST['date'];
$cash = $_POST['cash'];
$goods = $_POST['goods'];
$applicant = $_SESSION['applicant'];
$appeal_id = $_SESSION['appeal_id'];

$sql = "INSERT INTO Disbursement(fullname, date, cash, goods)
    VALUES ('$applicant', '$date', '$cash', '$goods')";

if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>alert('Disbursement recorded'); window.location.href = 'record-aid-page.php';</script>";
    echo "<script type='text/javascript'>alert('$appeal_id');</script>";
}else{
    echo "<script type='text/javascript'>alert('$applicant');</script>";
    echo "<script type='text/javascript'>alert('Not recorded'); window.location.href = 'aid-details-page.php';</script>";
}

$sql = "UPDATE Appeals SET status = 'Complete' WHERE $appeal_id = appeal_id";
if(mysqli_query($conn, $sql)){
    echo "Updated status of $appeal_id to complete!";
}else{
    echo "ERROR $appeal_id" . $conn->error;
}
?>