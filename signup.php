<?php
include 'db-connection.php';


$fullname = $_POST['fullName'];
$idNo = $_POST['idNo'];
$address = $_POST['hsAddress'];
$houseIncome = $_POST['houseIncome'];
$organization = $_POST['organization'];
$_SESSION["fullname"] = $fullname;
$sql = "INSERT INTO Applicant (fullname, idNo, address, houseIncome, organization)
VALUES ('$fullname','$idNo','$address','$houseIncome','$organization')";

if ($conn->query($sql) === TRUE) {
	echo "Document uploaded"; 
    echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'file-sub-page.php';</script>";   
    }
	else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>

