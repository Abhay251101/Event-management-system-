<html>
    <style>
        body{
            background-color:gray;
        }
        .container1{
            display:flex;
            flex-direction:column;
            gap:20px;
            margin-top:120px;
            margin-left:280px;
            width:40%;
        }
        .btn{
            background-color: #035ab7;
            color:white;
            padding:20px;
            border-radius:10px;
            width:40%;
        }
        .container2{
            display:flex;
            flex-direction:column;
            gap:20px;
            margin-top:120px;
            margin-left:100px;
            width:40%;
        }
        .container{
            display:flex;
            flex-direction:row;
        }
        .top-btn{
            display:flex;
            justify-content:center;
            align-content:center;
            align-items:center;
            margin-top:40px;
        }
        .bottom-btn{
            display:flex;
            justify-content:center;
            align-content:center;
            align-items:center;
            margin-top:30px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #ddd;
        }

    </style>
    <body>
        <div class="top-btn">
            <button class="btn">Details</button>
        </div>
        <div class="container">
        <div class="container1">
            <button class="btn">Name</button>
            <button class="btn">Email</button>
            <button class="btn">Address</button>
            <button class="btn">City</button>
        </div>
        <div class="container2">
            <button class="btn">Number</button>
            <button class="btn dropdown-btn">payment Method</button>
            <div class="dropdown-content">
            <a href="#">Catering</a>
            <a href="#">Florist</a>
        </div>
            <button class="btn">State</button>
            <button class="btn">pincode</button>
        </div>
        </div>
        <div class="bottom-btn">
            <button class="btn">Order Now</button>
        </div>
    </body>
</html>