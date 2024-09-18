<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>

</head>
<style>
.container {
    display:flex;
    flex-wrap:wrap;
    flex-direction: row;
    gap: 200px;
    background-color:gray;
    padding-top:50px;
    padding-bottom:50px;
}

    .navbar {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar .left h2 {
    margin: 0;
}

.navbar .right {
    display: flex;
    gap: 15px;
}

.navbar .nav-btn {
    background-color: white;
    color: black;
    padding: 15px 25px;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.navbar .nav-btn:hover {
    background-color: gray;
}
/* product */
.product-form {
    background-color: #007bff;
    padding: 20px;
    margin: 20px;
    width: 500px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-left:100px;
}

.product-form h3 {
    margin-bottom: 20px;
    color: #333;
}

.product-form form label {
    font-size: 16px;
    color: #333;
}



.product-form .add-to-cart-btn {
    background-color: white;
    color: black;
    width:70%;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product-form .add-to-cart-btn:hover {
    background-color: #218838;
}
.product-items{
    width: 90%;
    background-color:white;
    color:black;
    padding: 20px;
    border-radius: 5px;
    cursor:pointer;
}
.more-options {
    display: flex;
    flex-direction: row;
    flex-wrap : wrap;
    width: 38%;
    text-align:center;
    /* align-items:center; */
    align-content:center;
}
/* right div */
.right-div-items{
    margin:12px;
    background-color:blue;
    color:white;
    border-radius: 5px;
    padding:20px;
    text-align:center;
    cursor:pointer;
}
.RS {
    padding-right:40px;
    padding-left:40px;
}
.decor-none{
    text-decoration:none;
    background: white;
    color:black;
}
</style>
<body>


   <!-- Navbar -->
   <nav class="navbar">
        <div class="left">
            <h2>Welcome, Vendor</h2>
        </div>
        <div class="right">
            <a href="productstatus.php" class="nav-btn">Product Status</a>
            <a href="request.php" class="nav-btn">Request Items</a>
            <a href="view_products.php" class="nav-btn">View Product</a>
            <a href="logout.php" class="nav-btn logout-btn">Logout</a>
        </div>
    </nav>
    <div class="container">


    <div class="product-form">
        <form action="process_add_items.php" method="POST" enctype="multipart/form-data">
            <p class="product-items">Product Name</p>
            <p class="product-items">Product Price</p>
            <p class="product-items">Product Image</p>
            <button type="submit" class="add-to-cart-btn">Add to Cart</button>
        </form>
    </div>

    <div class="more-options">
        <p class="right-div-items">Product Image</p>
        <p class="right-div-items">Product Name</p>
        <p class="right-div-items">Product Price</p>
        <p class="right-div-items">Action</p>
        <p class="right-div-items RS">Image</p>
        <p class="right-div-items RS">Image Name</p>
        <p class="right-div-items RS">Rs</p>
        <p class="right-div-items">Update</p>
    </div>
    </div>

</body>
</html>
