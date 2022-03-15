<?php
include_once "db-connection.php";
$conn = OpenCon();

echo "Connected successfully";

if(isset($_POST['submit'])){
	$fullname = $_REQUEST['fullname'];
	$idNo = $_REQUEST['idNo'];
	$address = $_REQUEST['address'];
	$houseIncome = $_REQUEST['houseIncome'];
	$organization = $_REQUEST['organization'];


	$sql = "INSERT INTO Applicant (fullname, idNo, address, houseIncome, organization)
	VALUES ('$fullname','$idNo','$address','$houseIncome','organization')";

	if(mysqli_query($conn, $sql)){
		echo "<h3>data stored in a database successfully.";
	} else{
		echo "ERROR: $sql. "
			. mysqli_error($conn);
	}

	CloseCon($conn);
}
?>

