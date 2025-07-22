<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "<script>alert('Silakan login dulu'); location.href='login.php';</script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WEB KITA</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Top Navigation -->
  <header class="navbar">
    <div class="logo">WEB KITA</div>
    <nav class="nav-links">
      <a href="#">Dashboard</a>
      <a href="#">Upload</a>
      <a href="#">Bima</a>
      <a href="#">KPRO</a>
      <span>Selamat datang, <?= $_SESSION['user']['nama'] ?> | <a href="logout.php">Logout</a></span>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="dashboard">
    <h1>Dashboard</h1>
    <div class="filter-bar">
      <select><option>All</option></select>
      <select><option>All Transaksi</option></select>
      <select><option>All Kategori</option></select>
      <input type="date" value="2025-02-18" />
      <span>to</span>
      <input type="date" value="2025-02-18" />
      <button class="filter-btn">Filter</button>
    </div>
  </main>
</body>
</html>
