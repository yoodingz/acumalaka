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
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

  <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>

  </div>
</body>
</html>
