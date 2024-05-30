<?php
require '../config1/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pengeditan Database Big Buns</title>
  <link rel="shortcut icon" type="x-icon" href="../img/icons8-input-48.png">
  <link rel="stylesheet" href="Form_produk.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <label for="title" class="judul-form">FORM PENGEDITAN DATABASE BIG BUNS!</label>
  <?php
  $id = $_GET['edit'];

  $query = "SELECT * FROM tb_produk WHERE id_produk = '$id'";
  $result = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <form class="colorful-form" method="post" action="" autocomplete="off">
      <div class="form-group">
        <label class="form-label">ID Produk: </label>
        <input required placeholder="Masukkan ID Produk" name="id_produk" class="form-input" type="text" value="<?php echo $row['id_produk'] ?>">
      </div>
      <div class="form-group">
        <label class="form-label">Nama Produk:</label>
        <input required placeholder="Masukkan nama produk" class="form-input" name="nama_produk" type="text" value="<?php echo $row['nama_produk'] ?>">
      </div>
      <div class="form-group">
        <label class="form-label">Kategori produk:</label>
        <select required class="form-input" name="kategori_produk" value="">
          <option value="classic_cheeseburger" selected hidden>Select an option</option>
          <option value="burger" <?php if ($row['kategori_produk'] == 'burger') {
                                    echo 'selected';
                                  } ?>>1. Burger</option>
          <option value="sandwich" <?php if ($row['kategori_produk'] == 'sandwich') {
                                      echo 'selected';
                                    } ?>>2. Sandwich</option>
          <option value="soda" <?php if ($row['kategori_produk'] == 'soda') {
                                  echo 'selected';
                                } ?>>3. Soda</option>
          <option value="pizza" <?php if ($row['kategori_produk'] == 'pizza') {
                                  echo 'selected';
                                } ?>>4. Pizza</option>
          <option value="french_fries" <?php if ($row['kategori_produk'] == 'french_fries') {
                                          echo 'selected';
                                        } ?>>5. French fries</option>
          <option value="rujak_soto" <?php if ($row['kategori_produk'] == 'rujak_soto') {
                                        echo 'selected';
                                      } ?>>6. Rujak soto</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Varian produk</label>
        <select required placeholder="Masukkan varian produk" class="form-input" value="" name="variant_produk">
          <option value="" selected hidden>Select an option</option>
          <option value="classic_cheeseburger" <?php if ($row['variant_produk'] == 'classic_cheeseburger') {
                                                  echo 'selected';
                                                } ?>>1. Classic cheeseburger</option>
          <option value="beef_bacon_burger" <?php if ($row['variant_produk'] == 'beef_bacon_burger') {
                                              echo 'selected';
                                            } ?>>2. Beef bacon burger</option>
          <option value="double_mushroom_burger" <?php if ($row['variant_produk'] == 'double_mushroom_burger') {
                                                    echo 'selected';
                                                  } ?>>3. Double mushroom burger</option>
          <option value="turkey_burger" <?php if ($row['variant_produk'] == 'turkey_burger') {
                                          echo 'selected';
                                        } ?>>4. Turkey burger</option>
          <option value="hawaiian_burger" <?php if ($row['variant_produk'] == 'hawaiian_burger') {
                                            echo 'selected';
                                          } ?>>5. Hawaiian burger</option>
          <option value="jalapeno_popper_burger" <?php if ($row['variant_produk'] == 'jalapeno_popper_burger') {
                                                    echo 'selected';
                                                  } ?>>6. Jalapeno popper burger</option>
          <option value="guacamole_burger" <?php if ($row['variant_produk'] == 'guacamole_burger') {
                                              echo 'selected';
                                            } ?>>7. Guacamole burger</option>
          <option value="coca_cola" <?php if ($row['variant_produk'] == 'coca_cola') {
                                      echo 'selected';
                                    } ?>>8. Coca cola</option>
          <option value="fanta" <?php if ($row['variant_produk'] == 'fanta') {
                                  echo 'selected';
                                } ?>>9. Fanta</option>
          <option value="sprite" <?php if ($row['variant_produk'] == 'sprite') {
                                    echo 'selected';
                                  } ?>>10. Sprite</option>
          <option value="mushroom_pizza" <?php if ($row['variant_produk'] == 'mushroom_pizza') {
                                            echo 'selected';
                                          } ?>>11. Mushroom pizza</option>
          <option value="pepperoni_pizza" <?php if ($row['variant_produk'] == 'pepperoni_pizza') {
                                            echo 'selected';
                                          } ?>>12. Pepperoni pizza</option>
          <option value="double_cheese_pizza" <?php if ($row['variant_produk'] == 'double_cheese_pizza') {
                                                echo 'selected';
                                              } ?>>13. Double cheese pizza</option>
          <option value="granule_flake_pizza" <?php if ($row['variant_produk'] == 'granule_flake_pizza') {
                                                echo 'selected';
                                              } ?>>14. Granule flake pizza</option>
          <option value="small_fries" <?php if ($row['variant_produk'] == 'small_fries') {
                                        echo 'selected';
                                      } ?>>15. Small fries</option>
          <option value="medium_fries" <?php if ($row['variant_produk'] == 'medium_fries') {
                                          echo 'selected';
                                        } ?>>16. Medium fries</option>
          <option value="large_fries" <?php if ($row['variant_produk'] == 'large_fries') {
                                        echo 'selected';
                                      } ?>>17. Large fries</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Stok</label>
        <input required placeholder="Masukkan stok produk" value="<?php echo $row['stok'] ?>" class="form-input" name="stok" type="number">
      </div>
      <div class="form-group">
        <label class="form-label">Harga</label>
        <input required placeholder="Masukkan harga produk" value="<?php echo $row['harga'] ?>" class="form-input" name="harga" id="email" type="text">
      </div>
      <div class="form-group">
        <label class="form-label">Tanggal ditambahkan</label>
        <input required placeholder="Masukkan tanggal ditambahkan" value="<?php echo $row['tanggal_ditambahkan'] ?>" class="form-input" name="tanggal_ditambahkan" type="date">
      </div>
      <div class="form-group">
        <label class="form-label">Validasi produk</label>
        <label class="form-label">
          <input require type="radio" name="validasi" value="ada" <?php if ($row['validasi'] == 'ada') {
                                                                    echo 'checked';
                                                                  } ?>>
          Stok ada
        </label>
        <label class="form-label">
          <input type="radio" name="validasi" value="tidak_ada" <?php if ($row['validasi'] == 'tidak_ada') {
                                                                  echo 'checked';
                                                                } ?>>
          Stok kosong
        </label>
      </div>
      <button href="" class="form-button" name="submit" type="submit">Edit</button>
    </form>
  <?php }  ?>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
  $id_produk = $_POST["id_produk"];
  $nama_produk = $_POST["nama_produk"];
  $kategori_produk = $_POST["kategori_produk"];
  $variant_produk = $_POST["variant_produk"];
  $stok = $_POST["stok"];
  $harga = $_POST["harga"];
  $tanggal_ditambahkan = $_POST["tanggal_ditambahkan"];
  $validasi = $_POST["validasi"];

  $query = "UPDATE tb_produk SET  nama_produk='$nama_produk', kategori_produk='$kategori_produk', variant_produk='$variant_produk', stok='$stok', 
    harga='$harga', tanggal_ditambahkan='$tanggal_ditambahkan', validasi='$validasi' WHERE id_produk='$id_produk')";
  mysqli_query($koneksi, $query);
}
?>