<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$display_name = $_SESSION['display_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>

    <div class="top">
    <div class="left">
        <img src="images/buku/icons/logo_pustakago[1].png" alt="Logo" class="logo">
    </div>

    <h2 class="center-title">User Profile</h2>

    <div class="right">
        <button>Edit Profile</button>
    </div>
</div>


    <div class="banner">
        <img src="images/buku/icons/BANNER.webp" alt="Banner">
    </div>


    <div class="profile">
        <img src="images/buku/icons/guest profile picture.jpg" alt="Avatar" class="avatar">
        <h3 class="text"><?= htmlspecialchars($display_name); ?></h3>

    </div>

    <div class="stats">
        <div>
            <p>100</p>
            <span>Posts</span>
        </div>
        <div>
            <p>&#8734;</p>
            <span>Followers</span>
        </div>
        <div>
            <p>1</p>
            <span>Following</span>
        </div>
    </div>

</body>
</html>
