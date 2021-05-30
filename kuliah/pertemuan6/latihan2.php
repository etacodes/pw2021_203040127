<?php
// $mahasiswa = [
//   ["Ericko Timur", "203040127", "Teknik Informatika",
//   "203040127@mail.unpas.ac.id"],
//   ["Andi Rahman Hakim", "203040122", "Teknik Informatika",
//   "203040122@mail.unpas.ac.id"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Ericko Timur",
    "nrp" => "203040127",
    "email" => "203040127@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "g1.jpg"
    ],
    [
    "nama" => "Andi Rahman Hakim",
    "nrp" => "203040122",
    "email" => "203040122@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "g2.jpg"
    ]
]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>
         <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
         </li>
         <li>Nama : <?= $mhs["nama"]; ?></li>
         <li>NRP : <?= $mhs["nrp"]; ?></li>
         <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
         <li>Email : <?= $mhs["email"]; ?></li>
     </ul>
<?php endforeach; ?>
</body>
</html> 