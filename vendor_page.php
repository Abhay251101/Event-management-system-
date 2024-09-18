<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>

</head>
<style>
/* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #e0e0e0; /* Light grey background */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Vendor Container */
.vendor-container {
    background-color: rgb(65, 65, 189);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 80%; /* Increased width for a wider layout */
    max-width: 1000px; /* Limit maximum width */

}

/* Heading Styling */
.vendor-container h1 {
    font-size: 28px;
    color: #333;
    background-color: rgb(187, 185, 185);
    padding: 15px;
    margin-bottom: 30px;
}

/* Vendor Options Styling (Flexbox) */
.vendor-options {
    display: flex;
    justify-content: space-around; /* Align items with equal space around */
    gap: 15px;
    flex-wrap: wrap; /* Allow wrapping if needed for smaller screens */
    color: black;
}

/* Option Buttons Styling */
.option-btn {
    display: inline-block;
    padding: 15px;
    background-color: rgb(187, 185, 185);
    color: black;
    text-decoration: none;
    font-size: 16px;
    text-align: center;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    flex: 1;
    margin: 10px;
    max-width: 200px; /* Limit the maximum width of buttons */
}

.option-btn:hover {
    background-color: #87898a;
}

/* Logout Button Styling */
.logout-btn {
    background-color: rgb(187, 185, 185);
}

.logout-btn:hover {
    background-color: #e60000;
}

/* add-items */
.navbar {
    background-color: #333;
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
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.navbar .nav-btn:hover {
    background-color: #0056b3;
}

.navbar .logout-btn {
    background-color: #ff4d4d;
}

.navbar .logout-btn:hover {
    background-color: #e60000;
}
</style>
<body>
    <div class="vendor-container">
        <h1>Welcome, Vendor</h1>
        <div class="vendor-options">
            <a href="your_items.php" class="option-btn">Your Items</a>
            <a href="add_item.php" class="option-btn">Add New Item</a>
            <a href="transactions.php" class="option-btn">Transaction</a>
            <a href="logout.php" class="option-btn logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>
