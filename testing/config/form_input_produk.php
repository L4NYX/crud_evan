<?php
require 'data.php';
require 'koneksi.php';

if(isset($_POST['submit'])){
    $id_produk = $_POST["id_produk"];
    $nama_produk = $_POST["nama_produk"];
    $kategori_produk = $_POST["kategori_produk"];
    $variant_produk = $_POST["variant_produk"];
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $tanggal_ditambahkan = $_POST["tanggal_ditambahkan"];
    $validasi = $_POST["validasi"];

    $query = "INSERT INTO tb_produk VALUES('$id_produk', '$nama_produk', '$kategori_produk', '$variant_produk', '$stok', 
    '$harga', '$tanggal_ditambahkan', '$validasi')";
    mysqli_query($koneksi, $query);
      
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input produk</title>
    <link rel="shortcut icon" type="x-icon" href="../img/icons8-input-48.png">
    <link rel="stylesheet" href="form_input_produk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <label for="title" class="judul-form">FORM PENGISIAN PRODUK BIG BUNS!</label>
<form class="colorful-form" method="post" action="" autocomplete="off">
  <div class="form-group">
    <label class="form-label" >ID Produk: </label>
    <input required placeholder="Masukkan ID Produk" name="id_produk" class="form-input" type="text" value="">
  </div>
  <div class="form-group">
    <label class="form-label" >Nama Produk:</label>
    <input required placeholder="Masukkan nama produk" class="form-input" name="nama_produk" type="text" value="">
  </div>
  <div class="form-group">
    <label class="form-label" >Kategori produk:</label>
    <select required class="form-input" name="kategori_produk" value="">
    <option value="classic_cheeseburger" selected hidden>Select an option</option>
            <option value="burger">1. Burger</option>
            <option value="sandwich">2. Sandwich</option>
            <option value="soda">3. Soda</option>
            <option value="pizza">4. Pizza</option>
            <option value="french_fries">5. French fries</option>
            <option value="rujak_soto">6. Rujak soto</option>
    </select>
  </div>
  <div class="form-group">
    <label class="form-label" >Varian produk</label>
    <select required placeholder="Masukkan varian produk" class="form-input" value="" name="variant_produk">
    <option value="" selected hidden>Select an option</option>
    <option value="classic_cheeseburger" selected hidden>Select an option</option>
            <option value="classic_cheeseburger">1. Classic cheeseburger</option>
            <option value="beef_bacon_burger">2. Beef bacon burger</option>
            <option value="double_mushroom_burger">3. Double mushroom burger</option>
            <option value="turkey_burger">4. Turkey burger</option>
            <option value="hawaiian_burger">5. Hawaiian burger</option>
            <option value="jalapeno_popper_burger">6. Jalapeno popper burger</option>
            <option value="guacamole_burger">7. Guacamole burger</option>
            <option value="coca_cola">8. Coca cola</option>
            <option value="fanta">9. Fanta</option>
            <option value="sprite">10. Sprite</option>
            <option value="mushroom_pizza">11. Mushroom pizza</option>
            <option value="pepperoni_pizza">12. Pepperoni pizza</option>
            <option value="double_cheese_pizza">13. Double cheese pizza</option>
            <option value="granule_flake_pizza">14. Granule flake pizza</option>
            <option value="small_fries">15. Small fries</option>
            <option value="medium_fries">16. Medium fries</option>
            <option value="large_fries">17. Large fries</option>
    </select>
  </div>
  <div class="form-group">
    <label class="form-label" >Stok</label>
    <input required placeholder="Masukkan stok produk" value="" class="form-input" name="stok" type="number">
  </div>
  <div class="form-group">
    <label class="form-label" >Harga</label>
    <input required placeholder="Masukkan harga produk" value="" class="form-input" name="harga" id="email" type="text">
  </div>
  <div class="form-group">
    <label class="form-label" >Tanggal ditambahkan</label>
    <input required placeholder="Masukkan tanggal ditambahkan" value="" class="form-input" name="tanggal_ditambahkan" type="date">
  </div>
  <div class="form-group">
    <label class="form-label" >Validasi produk</label>
    <label class="form-label">
    <input require type="radio" name="validasi" value="ada">
    Stok ada
  </label>
  <label class="form-label">
    <input type="radio" name="validasi" value="kosong">
    Stok kosong
  </label>
  </div>
  <button class="form-button" name="submit_produk" type="submit">Submit</button>
</form>

</body>
</html>