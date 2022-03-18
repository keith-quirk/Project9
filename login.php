<?php
include "db-connection.php";
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: register-for-repr.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    $sql = "SELECT * FROM Representatives WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['username'] === $username && $row['password'] === $password) {
            session_start();
                                
            $_SESSION["loggedin"] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['organization'] = $row['organization'];
            header("location: rep-home.php");
        }else {
            $error = "Your Login Name or Password is invalid";
            }
        }
    }
?>