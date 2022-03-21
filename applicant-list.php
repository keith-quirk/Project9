<?php
session_start();
include 'db-connection.php';


$id = $_POST["id"];
$sql = "SELECT * FROM Applicant WHERE id = $id";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count > 0){
    $row = mysqli_fetch_assoc($result);

        if ($row['username'] == $username) {
            $_SESSION['applicant'] = $row['fullname'];
            echo "<script type='text/javascript'>alert('Applicant found'); window.location.href = 'aid-details-page.php';</script>";   
        }else{
        echo "<script type='text/javascript'>alert('No such applicant'); window.location.href = 'aid-details-page.php';</script>";
        }
    }







?>