<?php
session_start();
include 'db-connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manage Organization</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">
        
        
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        body, html {
            height: 100%;
            line-height: 1.8;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

        .w3-container{
          margin-top: 50px;
          padding: 16px;
        }

        .dropdown, .addbtn{
          text-align: center;
        }

        input[type="submit"]{
          display:block;
          margin-left: 380px;
        }

        input[type="submit"], .addbtn{
          background-color: #ccc;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          width: 50%;
        }

        input[type="submit"]:hover, .addbtn:hover{
          background-color: #FFC300;
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
        <a href="#manage-organization" class="w3-bar-item w3-button"><i class="fa fa-th"></i> MANAGE ORGANIZATION</a>
        <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LOG OUT</a>
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
        <a href="#log-out" onclick="w3_close()" class="w3-bar-item w3-button">LOG OUT</a>
    </nav>

    <div class="w3-container" id="manage-org">
      <h1 class="w3-center">Manage Organizations</h1>
    </div>

    <div class="dropdown">
      <form name="orgFormdd" action="new_rep.php" method="get">
      <select name="org">
        <option>Select an existing Organization</option>
        <?php
        $query = "SELECT * FROM Organizations";
        $result = mysqli_query($conn,$query);
        WHILE($row=mysqli_fetch_array($result)){
          ?>
          <option value="<?php echo $row["name"]; ?>"><?php echo $row["org_id"]; ?>. <?php echo $row["name"]; ?></option>
        <?php
        }
        ?>
      </select>

        
        <input class="submit-btn" type="submit" value="Submit">
      </select>
      <br>
        <!--make dynamic dropdown list-->
      <button type="button" onclick="window.location.href='new_org.php'" class="addbtn">
        Add a New Organization
      </button>
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
</body>
</html>
