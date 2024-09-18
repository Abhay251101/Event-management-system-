<html>
    <style>
        body {
            background-color:grey;
        }

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
            padding:20px;
            border: 1px solid grey;
            width:10%;
            text-align:center;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            align-content:center;
            height: 200px;
            margin-top:50px;
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
            display:flex;
            gap:400px;
            align-items:center;
            justify-content:center;
            align-content:center;
        }
        .top-buttons{
            padding:20px;
            background-color:white;
            color:black;
            border: 1px solid green;
        }
        .button1 , .button2{
            padding:20px;
            background-color:white;
            color:black;
        }
        .decor-none{
            text-decoration:none;
            color:black;
        }

    </style>
    <body>

        <div class="heading">
            <button class="button1">Home</button>
            <span>Request Items</span>
            <button class="button2"><a class="decor-none" href="logout.php">Logout</a></button>
        </div>
        <div class="container">
            <div class="vendor">
            <span>Item 1</span>
            </div>
            <div class="vendor">
            <span>Item 2</span>
            </div>
            <div class="vendor">
            <span>Item 3</span>
            </div>
            <div class="vendor">
            <span>Item 4</span>
            </div>
        </div>
    </body>
</html>