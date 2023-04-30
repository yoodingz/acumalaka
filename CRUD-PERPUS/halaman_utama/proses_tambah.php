<?php
include "../koneksi.php";

if (isset($_POST['tambah'])) {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES ('$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>
