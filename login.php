<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>

    <main>
        <body>
            <div class="header">
                <h1><b>cityZen</b></h1>
            </div>


            <div class="container">
                <img src="user.png" alt="user" width="100" height="100" style="display: block;
                margin-left: auto; margin-right: auto;">

                <form action="" method="post">
                <br><br>
                <label>Username : </label>
                <input type="text" placeholder="Enter Username" name="username" required>  
                <br>
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>
                <input type="checkbox" checked=""> Remember me
                <br> 
                <button type="submit">Login</button>   
                <br>
                <hr>
                
                <label><b>Don't have an account yet?</b></label>
                <a href="signup.php">Sign up</a>
                </form>
            </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>

    </main>




</html>