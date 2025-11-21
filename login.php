<?php
session_start();
include 'connect.php';

$_SESSION['user'] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password === $row['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['display_name'] = $username;

            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/logis.css">
</head>
<body>
    <div class="login-box">
        <img src="images/buku/icons/logo_pustakago[2].png" alt="Logo">   
        <form method="POST">
            <div class="user-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="pass-box">
                <input type="password" name="password" placeholder="Password" required>
                <h6>Forgot Password</h6>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    
        <h5>Or Sign Up Using</h5>
        <div class="quick-login">
            <img src="images/buku/icons/GOOGLE.webp" alt="Google Login">
            <img src="images/buku/icons/X.jpg" alt="Twitter Login">
            <img src="images/buku/icons/FACE.webp" alt="Facebook Login">
        </div>
        <div class="sign-up">
    <h6>Don't have an account? <a href="register.php">Create an account</a></h6>
</div>
</body> 
</html>
