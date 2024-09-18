
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
            top:200px;

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
        .cart-heading-products{
            padding:20px;
            background-color:white;
            color:black;
            border:none;
            border-radius:10px;
            margin: 0 50px;
            width:10%;
            border:1px solid green;
        }
        .container2{
            position: absolute;
            top:30px;
            left:200px;
        }
        .bottom{
            background-color:#035ab7;
            padding:20px;
            color:white;
        }
        .delete{
            margin-left:1200px;
            padding:10px;
            border-radius:10px;
            border:1px solid green;
        }
        .proceed{
            color:black;
            text-align:center;
        }
        .proceed-button{
            margin-top:10px;
            padding:15px;
            width:40%;
            border: 1px solid green;
        }
        .logout{
            text-decoration:none;
            color:black;
        }
        .decor-none{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
        <div class="container2">
            <button class="cart-heading-products"><a class="decor-none" href="login.html">Home</a></button>
            <button class="cart-heading-products">View Product</button>
            <button class="cart-heading-products"><a class="decor-none" href="request.php">Request item</a></button>
            <button class="cart-heading-products"><a class="decor-none" href="productstatus.php">Product status</a></button>
            <button  class="cart-heading-products"><a class="logout" href="logout.php">LogOut</a></button>
        </div>
    <div class="container">
        <div class="cart-title">
            <h2 class="cart-heading">Shopping cart</h2>
        </div>

        <div class="cart-items">
            <!-- First row of 6 items -->
            <p class="cart-products">Name</p>
            <p class="cart-products">Image</p>
            <p class="cart-products">Price</p>
            <p class="cart-products">Quantity</p>
            <p class="cart-products">Total Price</p>
            <p class="cart-products">Action</p>

            <!-- Second row of 6 items -->
            <p class="cart-products">Image</p>
            <p class="cart-products">Product Name</p>
            <p class="cart-products">100</p>
            <p class="cart-products">2</p>
            <p class="cart-products">200rs</p>
            <p class="cart-products">Remove</p>
        </div>
        <div class="bottom">
            <span>Grand Total</span>
            <button class="delete">Delete All</button>
        </div>
        <div class="proceed">
            <button class="proceed-button"><a class="decor-none" href="checkout.php">Proceed to checkout</a></button>
        </div>
    </div>

</body>
</html>
