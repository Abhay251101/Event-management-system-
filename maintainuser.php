<html>
    <style>
        body{
            background:gray;
        }
        .logout{
            text-decoration:none;
            color:black;
        }
        .btn{
            background-color: #fff;
            color:black;
            padding:20px;
            border: 2px solid green;
            width:20%;
            border-radius:10px;
            cursor:pointer;
        }
        .buttons{
            display:flex;
            gap:500px;
            justify-content:center;
            align-content:center;
            align-items:center;
            margin-top:90px;
        }
        .left-btn{
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            gap:90px;
            margin-top:100px;
            margin-left:200px;
        }
        .right-btn{
            display:flex;
            flex-direction:column;
        }
        .right-div{
            position: absolute;
            left:800px;
            top:220px;
            width:40%;
            gap:40px;
            display:flex;
            flex-direction:column;
        }
    </style>
    <body>
        <div class="buttons">
            <button class="btn"><a class="logout" href="login.html">Home</a></button>
            <button class="btn"><a class="logout" href="logout.php">logout</a></button>
        </div>
        <div class="left-btn">
            <button class="btn">Membership</button>
            <button class="btn">user management</button>
        </div>
        <div class="right-div">
        <div class="right-btn">
            <button class="btn">Add</button>
            <button class="btn">Update</button>
        </div>
        <div class="right-btn">
        <button class="btn">Add</button>
        <button class="btn">Update</button>
        </div>
        </div>
    </body>
</html>