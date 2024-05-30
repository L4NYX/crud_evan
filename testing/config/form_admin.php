<?php
    require 'koneksi.php';

    if(isset($_POST["submit"])){
        $id_admin = $_POST["id_admin"];
        $username = $_POST["username"];
        $nama_admin = $_POST["nama_admin"];
        $password = $_POST["password"];

        $query = "INSERT INTO tb_admin VALUES('$id_admin', '$username', '$nama_admin', '$password')";
    mysqli_query($koneksi, $query);
    echo
    "
    <script>alert ('Data Inserted Succesfully')</script>
    ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input admin</title>
    <link rel="shortcut icon" type="x-icon" href="../img/icons8-input-48.png">
    <link rel="stylesheet" href="Form_admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<label for="title" class="judul-form">FORM PENGISIAN ADMIN BIG BUNS!</label>
<form class="colorful-form" method="post" action="" autocomplete="off">
  <div class="form-group">
    <label class="form-label" >ID admin: </label>
    <input required placeholder="Masukkan ID admin" name="id_admin" class="form-input" type="text" value="">
  </div>
  <div class="form-group">
    <label class="form-label" >Username:</label>
    <input required placeholder="Masukkan username admin" class="form-input" name="username" type="text" value="">
  </div>
  <div class="form-group">
    <label class="form-label" >Nama admin</label>
    <input required placeholder="Masukkan nama admin" value="" class="form-input" name="nama_admin" type="text">
  </div>
  <div class="form-group">
    <label class="form-label" >Password</label>
    <input required placeholder="Masukkan password" value="" class="form-input" name="password" type="password">
  </div>
  <button class="form-button" name="submit" type="submit">Submit</button>
</form>
</body>
</html>