<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="project.css">
   
    </head>
    <main>
    <body>
        <div class="header">
        <h1>Registration form</h1>
        </div>

        <form class="regForm" action="" method="post">

        <select>
            <label for="fullName">Full name:</label>
            <input type="text" placeholder="Enter full name" name="fullName" required>

            <label for="idNo">ID number:</label>
            <input type="number" placeholder="ID no." name="idNo" required>

            <label for="address">Adress:</label>
            <input type="text" placeholder="address" name="address" required>

            <label for="hseIncome">Household income:</label>
            <input type="number" placeholder="Income" name="hseIncome" required>

            <button type="submit">Register</button>
        </form>

        <form class="docForm">
            <input type="file" name="filename">
            <input type="submit">
        </form>
    </body>
    </main>
</html>