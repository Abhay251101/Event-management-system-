<?php include 'config.php'; ?>
<?php 
include 'connection.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $cpass = $_POST['cpassword'];
    $usertype = $_POST['user_type'];


    $select = "SELECT * FROM user_form WHERE email= '$email'";

    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists';
    } else if (!password_verify($cpass, $pass)) {

        $error[] = 'Passwords did not match';
    } else {

        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$usertype')";
        mysqli_query($conn, $insert);
        header('Location: login_form.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="styles.css?v=<?$version?>">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register now</h3>
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Confirm your password">
            <select name="user_type" id="">
                <option value="user">User</option>
                <option value="admin">Admin</option>
                <option value="vendor">Vendor</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login now</a></p>
        </form>
    </div>
</body>
</html>