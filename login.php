<?php
include "db-connection.php";


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
            $_SESSION['organization'] = $row['organization'];
            header("Location: rep-home.php");
        }else {
            echo "<script type='text/javascript'>alert(Your Login Name or Password is invalid); window.location.href = 'login-page.php';</script>";
      }
    }
}
?>