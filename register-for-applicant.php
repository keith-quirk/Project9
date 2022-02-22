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
           

            <div class="container">
                <div class="regHeader">
                    <h1>Registration form</h1>
                </div>

                <form class="signupForm" action="insert.php" method="post">
                    <label for="organization"><b>Organization:</b></label>
                
                    <select name="organization">
                        <option value="Org1">Org1</option>
                        <option value="Org2">Org2</option>
                        <option value="Org3">Org3</option>
                        <option value="Org4">Org4</option>
                    </select>
                    
                    
                    <label for="fullname"><b>Full name:</b></label>
                    <input type="text" placeholder="Enter full name" name="fullname" required>
            
                    <label for="idNo"><b>ID number:</b></label>
                    <input type="number" placeholder="ID no." name="idNo" required>
                
            
                    <label for="address"><b>Address:</b></label>
                    <input type="text" placeholder="Applicant address" name="address" required>
                
                    <label for="houseIncome"><b>Household income:</b></label>
                    <input type="number" placeholder="Income" name="houseIncome" required>
                
            
                    <button type="submit">Register</button>
                    
           
                    <label><b>Document submission:</b></label>
                    <input type="file" name="filename">
                    <br><br>

                    <label for="filename"><b>Filename:</b></label>
                    <input type="text" name="filename">
                    <br>

                    <label for="description"><b>Description:</b></label>
                    <input type="text" name="description">
                    <br>

                    <button type="submit">Submit</button>
                </form>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>
    </main>
>

</html>