<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Question Builder Application - Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <style> 
    
        body{
            background-image: url("images/login.png"); 
        }
    
        
        .login-container {           
            padding: 20px;
            border-radius: 10px;            
            text-align: center;
            width: 450px;
            color: rgb(71, 71, 71);
            font-size: larger;
            justify-content: center;
            align-items: center;            
        }
        
        h2 {
            margin-bottom: 20px;
            color:#410808;
            font-size: 32px;
        }
        .role-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }
        .role-btn:hover {
            background-color: #936538;
        }
        .admin {
            background-color: #D3BBA1;
            color: rgb(73, 51, 13);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
            font-family: 'Poppins',sans-serif;
        }
        .trainer {
            background-color: #D3BBA1;
            color: rgb(73, 51, 13);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
            font-family: 'Poppins',sans-serif;
        }
        .employee {
            background-color: #D3BBA1;
            color: rgb(73, 51, 13);
            font-size: 1.5pc;
            border-bottom:  rgb(99, 99, 99) 2px solid;
            border-right:  rgb(99, 99, 99) 2px solid;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            height: 50px;
            font-family: 'Poppins',sans-serif;
        }
        #questhive{
            position: relative;
            margin: 0 ;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            background-repeat: no-repeat;
            background-attachment:local;   
            background-size: 100% 100%;
            height: 720px;
        }
        .font{
            font-size: 42px;
            color: rgb(85, 63, 29);
            letter-spacing: 1px;
            margin: 0px;
        }
        .span{
            font-size: 65px;
            font-style:italic;
            margin-top: 0px;
            color:#442c14;

        }
        h3{
            color: #1e1b18;
            font-style: italic;
            margin-left: 100px;
            margin-top: 0px;
        }
        img{
            height:100px;
            width:auto;
            margin-right: 0px;
        }
        .img{
            position: absolute;
        }
        .content{
            position: relative;
            padding-left: 100px;
            padding-top: 10px;
        }

    </style>  
</head>
<body>
    <div class="q">
        <div class="img"> <img src="images/image2.png" alt="text"></div>
        <div class="content"> <h2 class="font"><span style="font-style: italic;" class="span">Q</span>uesthive</h2>
         <h3>Learn to lead</h3> </div> 
    </div>
  
   
<center>
<div class="login-container" style="margin-top: 100px; align-items: center;">
    <h2 style="padding-bottom: 5px;">Login as</h2>
    
    <button class="role-btn admin" onclick="window.location.href='admin_login.php'">Administrator</button>
    <button class="role-btn trainer" onclick="window.location.href='trainer_login.php'">Trainer</button>
    <button class="role-btn employee" onclick="window.location.href='employee_login.php'">Employee</button>
</div>
</center>
</body>
</html>