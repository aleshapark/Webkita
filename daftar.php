<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar Akun</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <?php
    if (isset($_POST['username'])) {
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query($koneksi, "INSERT INTO `login dan pass`(nama, username, password) VALUES('$nama','$username','$password')");

      if ($query) {
        echo '<script>alert("Selamat Datang, Pendaftaran Berhasil. Silakan login."); location.href="login.php";</script>';
      } else {
        echo '<script>alert("Pendaftaran gagal.");</script>';
      }
    }
  ?>

  <form method="post">
    <div class="login-box">
      <h3>Daftar Akun Baru</h3>
      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Daftar</button>

      <!-- Link ke login -->
      <a href="login.php" class="daftar-btn">Login</a>
    </div>
  </form>

</body>
</html>
