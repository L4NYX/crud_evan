<?php
    require 'koneksi.php';

    if (isset($_POST['submit_produk'])){
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $kategori_produk = $_POST["kategori_produk"];
        $variant_produk = $_POST["variant_produk"];
        $stok = $_POST["stok"];
        $harga = $_POST["harga"];
        $tanggal_ditambahkan = $_POST["tanggal_ditambahkan"];
        $validasi = $_POST["validasi"];

        mysqli_query($koneksi, "INSERT INTO tb_produk VALUES ('$id_produk', '$nama_produk','$kategori_produk'
        ,'$variant_produk','$stok',$harga,'$tanggal_ditambahkan','$validasi')");

        
        echo
        "
        <script>alert ('Data Inserted Succesfully')</script>
        ";

        header("location: form_input_produk.php");
    }
?>