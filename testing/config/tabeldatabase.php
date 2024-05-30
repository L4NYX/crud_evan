<?php
    require 'koneksi.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="tabledatabase.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabel database</title>
</head>
<body>
    <table style="background-color: black;">
        <tr class="tr" style="background-color: white;">
            <div class="th">
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Kategori  Produk</th>
            <th>Variant Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Validasi</th>
            <th>Tanggal ditambahkan</th>
            </div>
            

        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>