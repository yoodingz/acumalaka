
<?php
// Mulai session
session_start();

// Cek apakah session 'username' sudah ada
if (!isset($_SESSION['username'])) {
  // Jika tidak ada, redirect ke halaman login
  header('Location: ../index.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inventori Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Inventori Perpustakaan</h1>
        <a href="tambah.php" class="button">Tambah Buku</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "../koneksi.php";
                $query = "SELECT * FROM buku";
                $result = mysqli_query($koneksi, $query);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['judul_buku']; ?></td>
                        <td><?php echo $row['penulis']; ?></td>
                        <td><?php echo $row['penerbit']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_buku']; ?>" class="button edit">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id_buku']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="button delete">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="logout.php" class="button logout">Logout</a>
    </div>
</body>
</html>
