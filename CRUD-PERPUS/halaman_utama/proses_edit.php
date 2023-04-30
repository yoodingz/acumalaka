<?php
include "../koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

$query = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE id_buku=$id";
mysqli_query($koneksi, $query);

header("location:index.php");
?>
