<?php
session_start();
include 'db-connection.php';

?>
<!DOCTYPE html>
<html>
    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
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
                width: 80%;
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
                width: 20%;
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
            table {
            margin: 50px auto;
            border:1px solid black;
            text-align:center;
            padding:4px;
            border:none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);
            }



        </style>
    </head>
    <body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="rep-home.php" class="w3-bar-item w3-button w3-wide">cityZen</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
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
        <a href="#manage_org.php" onclick="w3_close()" class="w3-bar-item w3-button">ORGANIZE AID APPEAL </a>
        <a href="#account" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER APPLICANT</a>
        <a href="#log-out" onclick="w3_close()" class="w3-bar-item w3-button">RECORD</a>
        <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">LOG OUT</a>
    </nav>

    <br><br><br>
    <div class="w3-container">
    <h2>LIST OF APPLICANTS</h2>
    <table style="align:center; border:1px; width:100%; height:40px;">
    <thead>
        <tr>
            <th style="width: 5px;text-align:center;">ID</th>
            <th style="width: 150px;text-align:center;">Fullname</th>
            <th style="width: auto;text-align:center;">Address</th>
            <th style="width: 200px;">House Income</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM Applicant WHERE organization = '{$_SESSION['organization']}'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['houseIncome'];?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
        </table>
        <form action="applicant-list.php" method="POST">
            <input type="text" name="id" placeholder="Enter applicant ID" required></input>
            <button class="submitbtn" type="submit" name="btn">Submit</button>
        </form>
        </div>
    </body>
</html>
    