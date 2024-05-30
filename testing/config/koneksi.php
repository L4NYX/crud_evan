<?php
$server = 'localhost';
$user = 'root'; //user database default
$pass = ''; //pass database default
$db = 'db_bigbuns'; //nama database (disesuaikan dengan nama database)

//variable koneksi
$koneksi = mysqli_connect($server, $user, $pass, $db);
//untuk melakukan check koneksi apakah sudah sukses / belum
if ($koneksi->connect_error) {
    die("koneksi error: ". $conn->connect_error) ;
}
else echo '';
?>