<?php
error_reporting(0);
require_once("../config1/db.php");
$query = "SELECT * FROM tb_produk";
$result = mysqli_query($con, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="displaydata.css">
    <title>Database Produk Big Buns</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #FCBE37;">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <p class="display-6 title text-center">Database Produk Big Buns</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr>
                                <td style="background-color: black; color:white;">ID PRODUK</td>
                                <td style="background-color: black; color:white;">NAMA PRODUK</td>
                                <td style="background-color: black; color:white;">KATEGORI PRODUK</td>
                                <td style="background-color: black; color:white;">VARIANT PRODUK</td>
                                <td style="background-color: black; color:white;">STOK</td>
                                <td style="background-color: black; color:white;">HARGA</td>
                                <td style="background-color: black; color:white;">TANGGAL DITAMBAHKAN</td>
                                <td style="background-color: black; color:white;">VALIDASI </td>
                                <td style="background-color: black; color:white;">OPTION </td>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {


                                ?>
                                    <td><?php echo $row['id_produk'] ?></td>
                                    <td><?php echo $row['nama_produk'] ?></td>
                                    <td><?php echo $row['kategori_produk'] ?></td>
                                    <td><?php echo $row['variant_produk'] ?></td>
                                    <td><?php echo $row['stok'] ?></td>
                                    <td><?php echo $row['harga'] ?></td>
                                    <td><?php echo $row['tanggal_ditambahkan'] ?></td>
                                    <td><?php echo $row['validasi'] ?></td>
                                    <td>
                                        <a href="editdataproduk.php?edit=<?php echo $row['id_produk'] ?>" style="width: 58px; margin-bottom:2px;" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="?aksi=hapus&id=<?php echo $row['id_produk'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        <?php
                                        if ($_GET['aksi'] == 'hapus') {
                                            $id = $_GET['id'];
                                            mysqli_query($con, "DELETE FROM tb_produk WHERE id_produk='$id'");
                                            header('location:displaydata.php');
                                        }
                                        ?>
                                    </td>
                            </tr>

                        <?php
                                }

                        ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>