<?php 
require '../functions.php';
$tv = cari($_GET['keyword']);
?>

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
			<p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
		</td>
	</tr>
	<?php endif; ?>

	<?php $i = 1; 
	foreach($tv as $tv) : ?>
	<tr>
		<td><?= $i++; ?></td>
		<td><img src="img/<?= $tv['Gambar']; ?>" width="70"></td>
		<td><?= $tv['Nama']; ?></td>
		<td>
			<a href="detail.php?id=<?= $tv['id']; ?>">lihat detail</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>