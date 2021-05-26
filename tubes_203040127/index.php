<?php  
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$tv = query("SELECT * FROM tv");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
	$tv = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h3>Daftar TV</h3>

	<a href="tambah.php">Tambah Data TV</a>
  	<br><br>

  	<form action="" method="POST">
  		<input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus class="keyword">
  		<button type="submit" name="cari" class="tombol-cari">Cari!</button>
  	</form>
  	<br>

  	<div class="container">
	<table border="1" cellpadding="10" cellspacing="0s">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Lainnya</th>
		</tr>

		<?php if(empty($tv)) : ?>
		<tr>
			<td colspan="4">
				<p style="color: red; font-style: italic;">data TV tidak ditemukan!</p>
			</td>
		</tr>
		<?php endif; ?>

		<?php $i = 1; 
		foreach($tv as $tv) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $tv['Gambar']; ?>" width="100"></td>
			<td><?= $tv['Nama']; ?></td>
			<td>
				<a href="detail.php?id=<?= $tv['id']; ?>">lihat detail</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>

	<script src="js/script.js"></script>
</body>
</html>