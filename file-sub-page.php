<?php>
session_start();
include "db-connection.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">

        <style>
            .w3-bar .w3-button {
                padding: 16px;
            }

            .w3-container{
                font-family: 'Open Sans Condensed', arial, sans;
                width: 50%;
                padding: 30px;
                background: #FFFFFF;
                margin: 50px auto;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }

            .dropdown, .addbtn{
                text-align: center;
                }

            input[type=text], input[type=number] {
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                outline: none;
                display: block;
                width: 100%;
                padding: 7px;
                border: none;
                border: 2px solid #ddd;
                margin-bottom: 10px;
                font: 16px Arial, Helvetica, sans-serif;
                height: 45px;
            }

            input[type=text]:focus, input[type=number]:focus{
                border: 2px solid #b4b4d8;
            }

            body {
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 20px;
                background-color: #eeeeee;
            }

            .sub-button{
                -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
                -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
                box-shadow: inset 0px 1px 0px 0px #45D6D6;
                background-color: #2CBBBB;
                border: 1px solid #27A0A0;
                display: inline-block;
                cursor: pointer;
                color: #FFFFFF;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 14px;
                padding: 8px 18px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .sub-button:hover{
                background-color: #34CACA;
            }

            h2 {
                background: #4D4D4D;
                text-transform: uppercase;
                font-family: 'Open Sans Condensed', sans-serif;
                color: white;
                font-size: 18px;
                font-weight: 100;
                padding: 20px;
                margin: -30px -30px 30px -30px;
            }

            a{
                -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
                -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
                box-shadow: inset 0px 1px 0px 0px #45D6D6;
                background-color: #2CBBBB;
                border: 1px solid #27A0A0;
                display: inline-block;
                cursor: pointer;
                color: #FFFFFF;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 14px;
                padding: 8px 18px;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover{
                background-color: #34CACA;
            }
        </style>
    </head>

    <body>
        <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="rep-home.php" class="w3-bar-item w3-button w3-wide">cityZen</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#manage-organization" class="w3-bar-item w3-button"><i class="fa fa-th"></i> MANAGE ORGANIZATION</a>
            <a href="logout.php" class="w3-bar-item w3-button">LOG OUT</a>
            </div>

            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
            <a href="#manage-organization" onclick="w3_close()" class="w3-bar-item w3-button">MANAGE ORGANIZATION</a>
            <a href="#account" onclick="w3_close()" class="w3-bar-item w3-button">ACCOUNT</a>
            <a href="logout.php" class="w3-bar-item w3-button">LOG OUT</a>
        </nav>
            
           
        <div class="w3-container">
            <h2>File submission</h2>
            <form action="file-submission.php" method="post" enctype="multipart/form-data">

                <label>Document submission:</label>
                <input type="file" name="file">
                <br><br>

                <label for="filename">Filename:</label>
                <input type="text" name="filename">
                <br>

                <label for="description">Description:</label>
                <input type="text" name="description">
                <br>

                <button class="sub-button" type="submit" value="Upload file">Submit</button>
                <a href="register-for-repr.php">Back</a>
            </form>
        </div>
        <script>
        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");
        
        function w3_open() {
            if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            } else {
            mySidebar.style.display = 'block';
            }
        }
        
        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
        </script>
    <body>
</html>