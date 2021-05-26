<?php  
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$tv = query("SELECT * FROM tv WHERE id = $id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail TV</title>
</head>
<body>
	
	<h3>Detail TV</h3>

	<ul>
		<li><img src="img/<?= $tv['Gambar']; ?>" width="150"></li>
		<li>Nama : <?= $tv['Nama']; ?></li>
		<li>Harga : <?= $tv['Harga']; ?></li>
		<li>Diproduksi : <?= $tv['Diproduksi']; ?></li>
		
		<li><a href="ubah.php?id=<?= $tv['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $tv['id']; ?>" onclick= "return confirm('apakah anda yakin?');">hapus</a></li>
		<li><a href="index.php">Kembali ke daftar TV</a></li>
	</ul>

</body>
</html>