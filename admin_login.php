<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="static/project.css">
    <style>
        body{
            background-image: url("images/login.png");
        }
    </style>
</head>
<body>
        <div class="img"> <img src="images/image2.png" alt="text"></div>
        <a href="code1.html" style="position: relative; z-index: 10;">Contact us</a>
        
        <div class="content"> <h2 class="font"><span style="font-style: italic;" class="span">Q</span>uesthive</h2>
         <h3>Learn to lead</h3> </div> 
    <center>
<div class="login-container">
    <h2 style="font-size: 38px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Administrator Login</h2>
    <form onsubmit="return validateLogin()">
        <input type="text" id="username1" name="username1" placeholder="Username" required>
        <input type="password" id="password1" name="password1" placeholder="Password" required>
        <button type="submit" class="login-btn">Login</button>
        <p id="error-message" class="error-message">Invalid username or password</p>
    </form>
</div>
</center>
<script>
    function validateLogin() {
        const username1 = document.getElementById('username1').value;
        const password1 = document.getElementById('password1').value;
        if (username1 === 'admin' && password1 === '123') {
            window.location.href = 'admin_page.php'; // Redirect to the admin dashboard
            return false; // Prevent the form from actually submitting
        } else {
            document.getElementById('error-message').style.display = 'block'; // Show error message
            return false; // Prevent the form from submitting
        }
    }
</script>
</body>
</html>