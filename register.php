<?php
include 'connect.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if (empty($username) || empty($password) || empty($confirm)) {
        echo "<script>alert('Please fill in all fields!');</script>";
    } else if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        
        $plain_password = $password; 
        
        $check_stmt = mysqli_prepare($conn, "SELECT username FROM user WHERE username = ?");
        mysqli_stmt_bind_param($check_stmt, "s", $username);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
            echo "<script>alert('Username already exists!');</script>";
            mysqli_stmt_close($check_stmt);
        } else {
            mysqli_stmt_close($check_stmt); 

            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $insert_stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($insert_stmt, "ss", $username, $plain_password);
            
            if (mysqli_stmt_execute($insert_stmt)) {
                echo "<script>alert('Account created successfully! You can now log in.'); window.location='login.php';</script>";
            } else {
                echo "<script>alert('Error creating account: " . mysqli_error($conn) . "');</script>";
            }
            mysqli_stmt_close($insert_stmt);
        }
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="css/register.css"> 
</head>
<body>
    <div class="login-box">
        <img src="images/buku/icons/logo_pustakago[1].png" alt="Pustakago Logo"> 
        
        <h2>Create Account</h2>

        <form method="POST" action="register.php"> 
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="sign-up-btn">Sign Up</button>
        </form>

        <div class="footer-link">
            <span>Already have an account? <a href="login.php">Login</a></span>
        </div>
        
    </div>
</body>
</html>