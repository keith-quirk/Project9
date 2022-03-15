<?php>
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
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <form class="signupForm" action="applicant-insert.php" method="post">

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <body>
    </main>
</html>