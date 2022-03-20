<?php
session_start();
include 'db-connection.php';

?>
<!DOCTYPE html>
<html>
    <head>
<!--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";-->
<!--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;-->
<!--font-family: "Source Sans Pro", sans-serif;-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">

        <style>
            body {
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 20px;
                background-color: #eeeeee;
            }

            .container { 
                width:90%;
                height: 500px;
                margin-top:50px; 
                display:table; 
            } 
            
            .box1 {
                font-family: 'Open Sans Condensed', arial, sans;
                float:left;
                width: 50%;
                height:50%;
                background-color:white;
                border: 2px solid black;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }
            .box2 {
                font-family: 'Open Sans Condensed', arial, sans;
                float:right;
                width: 50%;
                height:50%;
                background-color:white;
                border: 2px solid black;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }
            .box3 {
                font-family: 'Open Sans Condensed', arial, sans;
                float:right;
                width: 50%;
                height:50%;
                background-color:white;
                border: 2px solid black;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }

            .box4 {
                font-family: 'Open Sans Condensed', arial, sans;
                float:left;
                width: 50%;
                height:50%;
                background-color:white;
                border: 2px solid black;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }

            .link{
                background-color: rgb(209, 209, 209);
                text-decoration: none;
                border: 3px solid yellow;
                padding: 30px 10px;
                font-size: 30px;
                font-family: sans-serif;
                position: relative;
                top: 90px;
                text-align: center;
                align-items: center;
            }

            .link1{
                background-color: rgb(209, 209, 209);
                text-decoration: none;
                border: 3px solid yellow;
                padding: 30px 70px;
                font-size: 30px;
                font-family: sans-serif;
                position: relative;
                top: 90px;
                text-align: center;
                align-items: center;
            }

            .link2{
                background-color: rgb(209, 209, 209);
                text-decoration: none;
                border: 3px solid yellow;
                padding: 30px 70px;
                font-size: 30px;
                font-family: sans-serif;
                position: relative;
                top: 90px;
                text-align: center;
                align-items: center;
            }
    
        </style>
    </head>

    <body>
        
        <div class="w3-top">
            <div class="w3-bar w3-white w3-card" id="myNavbar">
                <a href="rep-home.php" class="w3-bar-item w3-button w3-wide">cityZen</a>
                <!-- Right-sided navbar links -->
                <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i>ABOUT</a>
                <a href="applicant-list-page.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> VIEW APPLICANTS</a>
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

<br><br>
<center>
            <h2>WHAT WOULD YOU LIKE TO DO?</h2>
            
            
            <div class="container"> 
                <div class="box1">
                    <a class="link1" href="register-for-repr.php">ADD APPLICANT</a>
                </div>
                <div class="box2">
                    <a class="link2" href="new_appeal.php">CREATE APPEAL</a>

                </div>
                <div class="box3">
                    <a class="link" href="record-aid-page.php">RECORD CONTRIBUTION</a>

                </div>
                <div class="box4">
                    <a class="link" href="manage_org.php">MANAGE ORGANIZATION</a>

                </div>
            </div>
        </center>
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


            


    </body>
</html>