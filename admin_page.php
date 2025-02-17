<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="static/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <center><h1>Hello Admin!!</h1></center>
        <div class="game">
       
        <a  href="logout.php" >Logout</a>
       </div>
         </div> 
           
    
    <center>
    <div class="container">
        
        <div class="top-box ">
        <button onclick="" class="button box">
            <img src="images/system.png" alt="system">
            System Monitoring</button>
        <button onclick="" class="button box">
            <img src="images/statistics.png" alt="statistics">
            Usage Statics</button>
        <button onclick="window.location.href = 'admin_issue.php'" class="button box">
            <img src="images/notify.png" alt="Issues">
            Issues</button>
        </div>
        <div class="bottom ">
        <button onclick="window.location.href = 'admin_UM.php'" class="button box">
            <img src="images/user-removebg-preview.png" alt="user">
            User management
        </button>
        <button onclick="window.location.href = 'admin_report.php'" class="button box">
        <img src="images/report.png" alt="report">
            Report
        </button>
        <button onclick="" class="button box">
            <img src="images/settings.png" alt="settings">
            Settings
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