<?php
session_start();
include 'db-connection.php';
$fullname = $_SESSION["fullname"];
$file = $_FILES["file"]["name"];
$filetype = $_FILES["file"]["type"];
$filesize = $_FILES["file"]["size"];
$tempfile = $_FILES["file"]["tmp_name"];
$dir = "uploads/".$file;

$filename = $_POST["filename"];
$description = $_POST["description"];


if(move_uploaded_file($tempfile, $dir)){
    $sql = "INSERT INTO Document(fullname, filename, description, image)
    VALUES ('$fullname','$filename', '$description', '".$file."')";
    if ($conn->query($sql) === TRUE) {
    echo "Document uploaded";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'file-sub-page.php';</script>";   
    }
    else{
        echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'file-sub-page.php';</script>";
    }
?>