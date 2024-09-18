<html>
    <style>

        .container{
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            gap:50px;
            position:absolute;
            top:200px;
            left:400px;
            width:80%;
        }

        .vendor{
            background-color:#007bff;
            border-radius:25px;
            padding:20px;
            width:10%;
            text-align:center;
            color:white;

        }
        .shop-items{
            padding:10px;
            margin:10px 20px;
            width:80%;
            border:1px solid green;
        }
        .heading{
            background-color:#007bff;
            color:white;
            padding:20px;
            text-align:center;
            position:absolute;
            top:100px;
            width: 100%;
            font-size:25px;
        }
        .top-buttons{
            padding:20px;
            background-color:white;
            color:black;
            border: 1px solid green;
        }
        .buttons1 , .buttons2 {
            position:absolute;
        }
        .buttons2{
            right:50px;
        }
        .buttons1{
            left:50px;
        }
        .none{
            text-decoration:none;
            color:black;
        }
    </style>
    <body>
        <div class="buttons1">
            <button class="top-buttons"><a calss="none" href="login.html">Home</a></button>
        </div>
        <div class="buttons2">
        <button class="top-buttons"><a class="none" href="logout.php">Logout</a></button>
        </div>
        <div class="heading">
            <span>Vendor |</span>
            <span>Florist</span>
        </div>
        <div class="container">
            <div class="vendor">
                <h3>Vendor 1</h3>
                <p>Contact details</p>
                <button class="shop-items">Shop Item</button>
            </div>
            <div class="vendor">
                <h3>Vendor 2</h3>
                <p>Contact details</p>
                <button class="shop-items">Shop Item</button>
            </div>
            <div class="vendor">
                <h3>Vendor 3</h3>
                <p>Contact details</p>
                <button class="shop-items">Shop Item</button>
            </div>
            <div class="vendor">
                <h3>Vendor 4</h3>
                <p>Contact details</p>
                <button class="shop-items">Shop Item</button>
            </div>
        </div>
    </body>
</html>