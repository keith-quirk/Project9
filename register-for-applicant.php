<?php
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

            .regbutton{
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

            .regbutton:hover{
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
                text-decoration: none;
            }

            select {
                width:20%;
            }
        </style>
    </head>

    <main>
        <body>
            <div class="w3-container">
                    <h2>Registration form</h2>


                <form action="signup.php" method="post">
                    <label for="organization">Organization:</label>
                
                    <select name="organization">
                    <?php
                        $query = "SELECT name FROM organizations";
                        $result = mysqli_query($conn,$query);
                        WHILE($row=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $row["name"]; ?>"><?php echo $row["org_id"]; ?>. <?php echo $row["name"]; ?></option>
                        <?php
                        }
                    ?>
                    </select>
                    <br><br>
                    <label for="fullname">Full name:</label>
                    <input type="text" placeholder="Enter full name" name="fullname" required>
            
                    <label for="idNo">ID number:</label>
                    <input type="number" placeholder="ID no." name="idNo" required>
                
            
                    <label for="address">Address:</label>
                    <input type="text" placeholder="Applicant address" name="address" required>
                
                    <label for="houseIncome">Household income:</label>
                    <input type="number" placeholder="Income" name="houseIncome" required>
                
            
                    <button class="regbutton" type="submit" name="submit">Sign up</button>
                    
                </form>
                    </div>

        </body>
    </main>
>

</html>