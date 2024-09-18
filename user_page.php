<html>
    <style>
        body{
            background-color:gray;
        }
.container{
    align-items:center;
    align-content:center;
    position:absolute;
    left:250px;
    top:200px;
}
        .welcome{
            text-align:center;
        }
        .welcome h1{
            background-color:#035ab7;
            padding:10px;
            color:white;
        }
        /* dropdown button */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-btn {
            background-color: #007bff;
            color: white;
            padding: 15px 40px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin:0 50px 0 50px;
            font-size: 20px;
            font-weight:600;
        }

        .dropdown-btn:hover {
            background-color: #0056b3;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1;
        }

        /* Dropdown links */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown menu on button hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .user-buttons{
            padding:20px;
            background-color:#007bff;
            color:white;
            border:none;
            border-radius:7px;
            margin: 0 50px 0 50px;
            padding: 16px 40px;
            font-size: 20px;
            font-weight:600;

        }
        .button-logout{
            position: absolute;
            top:400px;
            left:650px;
        }
        .logout{
            text-decoration:none;
            color:white;
        }
    </style>
    <body>
       
        <div class="welcome">
            <h1>welcome user</h1>
        </div>
        <div class="container">
        <div class="dropdown">
        <button class="dropdown-btn"><a class="logout" href="vendordetails.php">Vendor</a> </button>
        <div class="dropdown-content">
            <a href="#">Catering</a>
            <a href="#">Florist</a>
            <a href="#">Decoration</a>
            <a href="#">Lighting</a>
        </div>
        <button class="user-buttons"><a class="logout" href="cart.php">Cart</a></button>
        <button class="user-buttons">Guest List</button>
        <button class="user-buttons"><a class="logout" href="orderstatus.php">Order Status</a></button>
    </div>

    </div>
    <div class="button-logout">
    <button class="user-buttons "><a class="logout" href="logout.php">Logout</a></button>
    </div>
   
    </body>
</html>