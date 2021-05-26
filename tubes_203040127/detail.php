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
$mhs = query("SELECT * FROM tv WHERE id = $id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail TV</title>
</head>
<body>
	
	<h3>Detail TV</h3>

	<ul>
		<li><img src="img/<?= $mhs['Gambar']; ?>" width="150"></li>
		<li>Nama : <?= $mhs['Nama']; ?></li>
		<li>Harga : <?= $mhs['Harga']; ?></li>
		<li>Tahun Pembuatan : <?= $mhs['Tahun Pembuatan']; ?></li>
		
		<li><a href="ubah.php?id=<?= $mhs['Id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $mhs['Id']; ?>" onclick= "return confirm('apakah anda yakin?');">hapus</a></li>
		<li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
	</ul>

</body>
</html>