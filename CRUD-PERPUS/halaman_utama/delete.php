<?php
include "../koneksi.php";

$id_buku = $_GET['id'];

$query = "DELETE FROM buku WHERE id_buku = '$id_buku'";
$delete = mysqli_query($koneksi, $query);

if ($delete) {
    header('location:index.php');
} else {
    echo "Gagal menghapus data.";
}
?>
