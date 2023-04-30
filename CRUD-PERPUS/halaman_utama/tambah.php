<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Buku</h1>
        <form method="post" action="proses_tambah.php">
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku" required>
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" required>
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" required>
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" min="1800" max="<?php echo date('Y'); ?>" required>
            </div>
            <button type="submit" name="tambah">Tambah</button>
        </form>
    </div>
</body>
</html>
