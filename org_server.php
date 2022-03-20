<?php
include 'db-connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
     $sql = "INSERT INTO Organization (name, address)
     VALUES ('$name', '$address')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
header("location: new_org.php");
?>