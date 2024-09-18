<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>
<html>
    <style>
        body{
            background-color:gray;
        }
        .welcome h2{
            background-color:white;
            color:black;
            padding:15px;
            width:70%;
            border:2px solid green;
        }
        .welcome{
            text-align:center;
            position: relative;
            top:100px;
            display:flex;
            justify-content:center;
            align-items:center;
            align-content:center;
        }
        .buttons{
            position: absolute;
            top:350px;
            display:flex;
            gap:350px;
            left:300px;
        }
        .btn{
            background-color:white;
            color:black;
            border:1px solid green;
            padding:20px 80px;
            font-size:25px;
            border:2px solid green;
        }
        .logout{
            text-decoration:none;
            color:black;
        }
        .btn2{
            background-color:white;
            color:black;
            padding:15px; 
            width:10%;
            border:2px solid green;
        }
        .buttons2{
            margin-top:50px;
            display:flex;
            gap:800px;
            justify-content:center;
            align-items:center;
            align-content:center;
        }
    </style>
    <body>
        <div class="buttons2">
            <button class="btn2" ><a class="logout" href="login.html">Home</a></button>
            <button class="btn2" ><a class="logout" href="logout.php">Logout</a></button>
        </div>
        <div class="welcome">
        <h2>Welcome Admin</h2>
        </div>
        <div class="buttons">
            <buttons class="btn"><a class="logout" href="maintainuser.php">Maintain user</a></buttons>
            <buttons class="btn"><a class="logout" href="maintainuser.php">Maintain vendor</a></buttons>
        </div>
    </body>
</html>