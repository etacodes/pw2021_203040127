<?php 
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengamnil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "data gagal ditambahkan!";
}
?>