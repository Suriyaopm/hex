<?php
session_start();
include("econnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee DashBoard</title>
    <link rel="stylesheet" href="static/admin.css">
    <style>
      body{
        background-image: url(images/dina.png);
      }
    </style>
</head>
<body>
    <img class="img" src="images/image2.png" alt="text">
    <div class="logo">
        <h3 id="questhive"><span>Q</span>uesthive</h3>
        <h4 class="head">Learn to lead</h4>
        <center><h1>  <p>
            Hello  <?php 
            if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT eusers.* FROM `eusers` WHERE eusers.email='$email'");
            while($row=mysqli_fetch_array($query)){
                echo $row['firstName'].' '.$row['lastName'];
            }
            }
            ?>
            !
          </p>
          </h1></center> 
        <div class="game">
        <a href="logout.php" >Logout</a>
       </div>
         </div> 
         <center>
            <div class="container">
                
                <div class="top-box ">
                <button onclick="" class="button box">
                    <img src="images/hat.png" alt="system">
                    Access Questions</button>
                <button onclick="" class="button box">
                    <img src="images/pad.png" alt="statistics">
                    Self Assessment</button>
                <button onclick="admin_issue.php" class="button box">
                    <img src="images/learning.png" alt="Issues">
                    Learning and Development</button>
                </div>
                <div class="bottom ">
                <button onclick="admin_UM.php" class="button box">
                    <img src="images/reque.png" alt="user">
                    Request Questions
                </button>
                <button onclick="window.location.href = 'employee_feedback.php'" class="button box">
                <img src="images/feedback.png" alt="report">
                    FeedBack
                </button>
                <button onclick="window.location.href='employee_report.php'" class="button box">
                    <img src="images/report.png" alt="settings">
                    Report
                </button>
            </center>
                </div>
            </div>
      <script>
        document.getElementById("logoutButton").addEventListener("click", function(event) {
          event.preventDefault();  // Prevents the default action (which is to navigate to the logout page)

          // Show a confirmation dialog
        var confirmation = confirm("Are you sure you want to log out?");

        // If the user confirms, proceed with the logout
        if (confirmation) {
          window.location.href = this.href;  // Navigate to the logout page
        }
        });
        

      </script>
      
</body>
</html>