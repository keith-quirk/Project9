<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fullname = $_REQUEST['fullname'];
		$idNo = $_REQUEST['idNo'];
		$address = $_REQUEST['address'];
		$houseIncome = $_REQUEST['houseIncome'];
		$organization = $_REQUEST['organization']
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO applicant VALUES ('$fullname',
			'$idNo','$address','$houseIncome')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$fullname\n $idNo\n
				\n$address\n$houseIncome");
		} else{
			echo "ERROR: $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
