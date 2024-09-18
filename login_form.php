<?php include 'config.php' ;  ?>
<?php include 'config.php'; ?>
<?php 
include 'connection.php';
session_start();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $cpass = $_POST['cpassword'];
    $usertype = $_POST['user_type'];


    $select = "SELECT * FROM user_form WHERE email= '$email'";

    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['user_type']== 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        } else if ($row['user_type']== 'user'){
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
    } else if ($row['user_type']== 'vendor'){
        $_SESSION['user_name'] = $row['name'];
        header('location:vendor_page.php');
}
    else {
        $error[] = 'incorrect email or password';
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="styles.css?v=<?$version?>">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login now</h3>
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">    
            <input type="submit" name="submit" value="Login now" class="form-btn">
            <p>Don't have an account? <a href="register_form.php">Register now</a></p>
        </form>
    </div>
</body>
</html>