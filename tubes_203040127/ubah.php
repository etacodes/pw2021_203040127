<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$tv = query("SELECT * FROM tv WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Data TV</title>
</head>
<body>
    <h3>Form Ubah Data TV</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
          <input type="hidden" name="id" value="<?= $tv['id']; ?>">
            
            <li>
                <label>
                  Nama :
                  <input type="text" name="nama" autofocus required value="<?= $tv['Nama']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Harga :
                  <input type="text" name="harga" required value="<?= $tv['Harga']; ?>">
                </label><br><br>
            </li>
            <li>
                <label>
                  Diproduksi :
                  <input type="text" name="diproduksi" required value="<?= $tv['Diproduksi']; ?>">
                </label><br><br>
            </li>
            
            <li>
                <input type="hidden" name="gambar_lama" value="<?= $tv['Gambar']; ?>">
                <label>
                  Gambar :
                  <input type="file" name="Gambar" class="Gambar" onchange="previewImage()">
                </label><br><br>
                <img src="img/<?= $tv['Gambar']; ?> " width="120" style="display: block;" class="img-preview">
                <br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
            </li>
        </ul>
    </form>
    <script>
        // preview image untuk tambah dan ubah
        function previewImage() 
        {
          const gambar = document.querySelector('.gambar');
          const imgPreview = document.querySelector('.img-preview');

          const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
          };
        }
    </script>
</body>

</html>