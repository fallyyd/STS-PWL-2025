<?php 
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Buku</title>
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
  <header>
    <div class="header-container">
      <img src="images/buku/icons/logo_pustakago[1].png" alt="Logo Sekolah" class="logo">
      <div class="search-bar">
        <input type="text" placeholder="Cari Buku">
      </div>
    </div>
  </header>

  <main>
    <section class="kategori">
      <h2>Kategori</h2>
      <div class="kategori-container">
        <button>Novel</button>
        <button>Fantasy</button>
        <button>Comics</button>
        <button>Horror</button>
      </div>
    </section>

    <section class="rekomendasi">
      <h2>Rekomendasi</h2>
      <div class="buku-container">
        <div class="buku-card" style="background-color: #fff3d9;">
          <img src="images/buku/sunsets never wait.jpeg" alt="Sunsets Never Wait">
          <h3>Sunsets Never Wait</h3>
          <p>Jonathan Cullen</p>
          <button onclick="window.location.href='sunset never wait.html'">Detail Buku</button>
        </div>
        <div class="buku-card" style="background-color: #d4f1f9;">
          <img src="images/buku/sin eater.jpeg" alt="Sin Eater">
          <h3>Sin Eater</h3>
          <p>Megan Campisi</p>
          <button onclick="window.location.href='sin eater.html'">Detail Buku</button>
        </div>
        <div class="buku-card" style="background-color: #c7f9cc;">
          <img src="images/buku/never ending sky.jpeg" alt="Never Ending Sky">
          <h3>Never Ending Sky</h3>
          <p>Joseph Kirkland</p>
          <button onclick="window.location.href='never ending sky.html'">Detail Buku</button>
        </div>
        <div class="buku-card" style="background-color: #e45dd2ff;">
          <img src="images/buku/harry potter.jpeg" alt="Harry Potter">
          <h3>Harry Potter</h3>
          <p>J.K. Rowling</p>
           <button onclick="window.location.href='harry potter.html'">Detail Buku</button>
        </div>
        <div class="buku-card" style="background-color: #f9f4c6ff;">
          <img src="images/buku/pride and prejustice.jpeg" alt="Pride and Prejustice">
          <h3>Pride and Prejudice</h3>
          <p>Jane Austen</p>
          <button onclick="window.location.href='Pride and prejustice.html'">Detail Buku</button>
      </div>
      <div class="buku-card" style="background-color: #e98c91ff;">
          <img src="images/buku/1984.jpeg" alt="1984">
          <h3>1984</h3>
          <p>George Orwell</p>
         <button onclick="window.location.href='1984.html'">Detail Buku</button>
      </div>
      <div class="buku-card" style="background-color: #e3c6f9;">
          <img src="images/buku/me before you.jpeg" alt="Harry Potter">
          <h3>Me Before You</h3>
          <p>Jojo Moyes</p>
          <button onclick="window.location.href='me before you.html'">Detail Buku</button>
      </div>
      <div class="buku-card" style="background-color: #6e5ac9ff;">
          <img src="images/buku/midnight library.jpeg" alt="Midnight Library">
          <h3>The Midnight Library</h3>
          <p>Matt Haig</p>
          <button onclick="window.location.href='midnight library.html'">Detail Buku</button>
    </section>
  </main>

 <footer>
  <nav class="footer-menu">
  
    <a href="homepage.php" class="menu-link current">
      <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="Home">
    </a>

    <a href="#" class="menu-link">
      <img src="https://cdn-icons-png.flaticon.com/512/149/149852.png" alt="Search">
   </a>
    
    <a href="#mainSearchBar" class="menu-link">
    <img src="https://cdn-icons-png.flaticon.com/512/151/151917.png" alt="History/List">
</a>

       <a href="profile.php" class="menu-link">
      <img src="https://cdn-icons-png.flaticon.com/128/456/456283.png" alt="profile">
   </a>
  </nav>  
</footer>

</body>
</html>
