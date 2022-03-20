<?php
session_start();

include "db-connection.php";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        
        <link rel="stylesheet" href="project.css">
    </head>

    <main>
        <body>
            <div class="header">
                <h1><b>cityZen</b></h1>
            </div>
           
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="register-for-repr.php">Registration</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>

            <div class="container">
                <div class="regHeader">
                    <h1>Registration form</h1>
                </div>

                <form class="signupForm" action="applicant-insert.php" method="post">
                    <label for="organization"><b>Organization:</b></label>
                
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
                    
                    
                    <label for="fullname"><b>Full name:</b></label>
                    <input type="text" placeholder="Enter full name" name="fullname" required>
            
                    <label for="idNo"><b>ID number:</b></label>
                    <input type="number" placeholder="ID no." name="idNo" required>
                
            
                    <label for="address"><b>Address:</b></label>
                    <input type="text" placeholder="Applicant address" name="address" required>
                
                    <label for="houseIncome"><b>Household income:</b></label>
                    <input type="number" placeholder="Income" name="houseIncome" required>
                
            
                    <button type="submit" name="submit">Register</button>
                    
                </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>
    </main>
>

</html>