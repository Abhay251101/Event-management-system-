<?php
// Start session and include necessary logic here, if needed
session_start();

// Example of session logic to ensure the user is logged in as a user
// if ($_SESSION['role'] != 'user') {
//     header("Location: login.html");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: gray;
        }
        
        .container {
            width: 90%;
            margin: 20px auto;
            position:relative;
            top:60px;

        }

        .cart-title {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Flexbox to align items in rows */
        .cart-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Individual product styling */
        .cart-products {
            width:12%;
            background-color: #035ab7;
            color: white;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            margin-bottom: 10px; /* Space between rows */
        }
        .cart-heading{
            background-color: lightblue;
            padding:20px;
            border-radius:20px;
        }


        .bottom{
            background-color:#035ab7;
            padding:20px;
            color:white;
        }


        .logout{
            text-decoration:none;
            color:white;
        }
        .btn{
            padding:20px;
            background-color:#007bff;
            color:white;
            width:10%;
        }
        .buttons{
            display:flex;
            gap:700px;
            justify-content:center;
            align-items:center;
            align-content:center;
        }
    </style>
</head>
<body>
<div class="cart-title">
            <h2 class="cart-heading">Product Status</h2>
        </div>

        <div class="buttons">
            <button class="btn">Home</button>
            <button class="btn"><a class="logout" href="logout.php">Logout</a></button>
        </div>
    <div class="container">
        <div class="cart-items">
            <!-- First row of 6 items -->
            <p class="cart-products">Name</p>
            <p class="cart-products">Email</p>
            <p class="cart-products">Address</p>
            <p class="cart-products">Status</p>
            <p class="cart-products">Update</p>
            <p class="cart-products">Delete</p>

            <!-- Second row of 6 items -->
            <p class="cart-products"></p>
            <p class="cart-products"></p>
            <p class="cart-products"></p>
            <p class="cart-products"></p>
            <p class="cart-products"></p>
            <p class="cart-products"></p>
        </div>
    </div>

</body>
</html>
