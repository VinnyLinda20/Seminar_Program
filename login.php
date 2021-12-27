<?php
require_once "koneksi.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/o.jpg" type="image/ico" />
        
        <title>S.I Perpustakaan | Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Sistem Informasi Perpustakaan</h1>

           <!-- fungsi login -->
          <!-- pembuka php -->
          <?php
           if(isset($_POST['login'])) {
                $user = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
                $pass = sha1(trim(mysqli_real_escape_string($koneksi, $_POST['password'])));
                $sql_login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$user' AND password = '$pass'") or die (mysqli_error($koneksi));
                if (mysqli_num_rows($sql_login) > 0) {
                    $level= mysqli_fetch_assoc($sql_login)['level'];
                $_SESSION['username'] = $user;
                $_SESSION['level'] = $level;
                // echo "<script>window.location='".base_url()."';</script>";   
                header('Location:index.php');
                } else {?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>username/password</strong> yang digunakan salah
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
           }
          ?>
          <!-- penutup php -->
          <!-- penutup fungsi login -->
                <form action="" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan username"> </br> </br>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password"> </br> </br>
                <button type="submit" name="login" class="button" value="login">Login</button>
                </form>
        </div>
        </div>     
    </body>
</html>