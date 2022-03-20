<?php
session_start();
include 'db-connection.php';
?>

<!DOCTYPE html>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
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
            .submitbtn{
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

            .submitbtn:hover{
                background-color: #34CACA;
            }
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            
            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            .pad {
                padding-right: 20px;
                text-decoration: none;
                color: #0000EE ;

            }
            </style>
    </head>

    <main>
        <body>
        <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="rep-home.php" class="w3-bar-item w3-button w3-wide">cityZen</a>
        </div>


            <div class="w3-container">
                <img src="user.png" alt="user" width="100" height="100" style="display: block;
                margin-left: auto; margin-right: auto;">

                <form action="login.php" method="post">
                    <br><br>
                    <label>Username : </label>
                    <input type="text" placeholder="Enter Username" name="username" required>  
                    <br>
                    <label>Password : </label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <input type="checkbox" checked=""> Remember me
                    <br>
                    <button class="submitbtn" type="submit">Login</button>
                    <br>
                    <hr>
                    
                    <label><b>Don't have an account yet?</b></label>
                    <a class="pad" href="signup.php">Sign up</a>
                    <a class="pad" href="view-appeals-page.php">Cancel</a>
                </form>
            </div>
            <br><br>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>

    </main>




</html>