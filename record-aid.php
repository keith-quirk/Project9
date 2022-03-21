<?php
session_start();
include 'db-connection.php';


$appeal_id = $_POST["id"];
$_SESSION['appeal_id'] = $appeal_id;
$sql = "SELECT * FROM Appeals WHERE appeal_id = $appeal_id && status = 'Pending'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count > 0){
    echo "<script type='text/javascript'>alert('Appeal found!'); window.location.href = 'applicant-list-page.php';</script>";
}else{
    echo "<script type='text/javascript'>alert('Try another appeal!'); window.location.href = 'record-aid-page.php';</script>";
}

?>