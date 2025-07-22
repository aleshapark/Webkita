<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Ke Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <?php
    if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query($koneksi, "SELECT * FROM `login dan pass` WHERE username='$username' AND password='$password'");

      if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo '<script>alert("Selamat datang, '.$data['nama'].'"); location.href="index.php"; </script>';
      } else {
        echo '<script>alert("Username atau password salah!");</script>';
      }
    }
  ?>

  <form method="post">
    <div class="login-box">
      <h3>Login to your account</h3>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      
      <!-- Tombol Daftar -->
      <a href="daftar.php" class="daftar-btn">Daftar</a>

    </div>
  </form>

</body>
</html>
