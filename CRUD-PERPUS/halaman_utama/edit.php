<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inventori Perpustakaan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Buku</h1>
        <?php
            include "../koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM buku WHERE id_buku = $id";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id_buku']; ?>">
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" id="judul" name="judul" value="<?php echo $row['judul_buku']; ?>">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" value="<?php echo $row['penulis']; ?>">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" value="<?php echo $row['penerbit']; ?>">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>">
            </div>
            <button type="submit" class="button">Simpan</button>
        </form>
    </div>
</body>
</html>
