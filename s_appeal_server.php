<?php
include 'db-connection.php';

$s_description = $_POST['s_description'];
$value = $_POST['value'];
$received_date = $_POST['received_date'];

$insert = "INSERT INTO contributions (description, value, received_date)
VALUES ('$s_description', '$value', '$received_date')";

if(mysqli_query($db, $insert)){
    echo "Success";
} else{
    echo $db->error;
}

header("location: selected_appeal.php");


?>
