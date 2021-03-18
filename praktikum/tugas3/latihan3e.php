<?php
/*
Ericko Timur Apandi
203040127
*/
?>

<?php 
$books = [
    [
        "Type" => "CBR 600RR SP",
        "Produk" => "HONDA",
        "Kapasitas Mesin" => "DOHC, 4-silinder, berkapasitas 599 cc. Mesinnya mampu mengeluarkan
         tenaga hingga 119,3 tk pada 14.000 rpm dan torsi 64 Nm pada 11.500 rpm.",
        "Dimensi" => "2.030 mm, lebar 685 mm, dan tinggi 1.140 mm.",
        "Harga" => "Rp 550.000.000",
        "gambar" => "cbr6.jpg"
    ],
    [
        "Type" => "GSX R-600",
        "Produk" => "SUZUKI",
        "Kapasitas Mesin" => "Mesin 599 cc 4 silinder yang memiliki transmisi 6 percepatan berkekuatan
         maksimal 126 PS pada 13.500 rpm dan torsi 69,6 Nm pada 11.500 rpm. ",
        "Dimensi" => "Berat(kg)	187,0
        L*W*H(mm) 2,030 x 710 x 1,135",
        "Harga" => "Rp 170.000.000",
        "gambar" => "gsxr600.jpg"
    ],
    [
        "Type" => "PANIGALE V4R",
        "Produk" => "DUCATI",
        "Kapasitas Mesin" => "Kapasitas ruang bakar 998 cc ini powernya mencapai 221 dk dan torsi 112 Nm.
        Motor ini punya limiter di 16.000 rpm dan 16.500 rpm di gigi 6",
        "Dimensi" => "Berat kosong 172 kg
        Tinggi Tempat duduk	830 mm
        Wheelbase 1.471 mm",
        "Harga" => "Rp 2.400.000.000",
        "gambar" => "panigalev4r.jpg"
    ],
    [
        "Type" => "YAMAHA R6",
        "Produk" => "YAMAHA",
        "Kapasitas Mesin" => "Mengusung mesin Liquid-cooled, DOHC, forward-inclined parallel
         4-cylinder, 4-valves dengan kapasitas 599 cc.Kecepatan maksimum: 257 km/jam",
        "Dimensi" => "2.040 mm P x 696-705 mm L x 1.095-1.150 mm T",
        "Harga" => "Rp 270.000.000",
        "gambar" => "ymhr6.jpg"
    ],
    [
        "Type" => "NINJA ZX-636",
        "Produk" => "KAWASAKI",
        "Kapasitas Mesin" => "Tipe Mesin 4 tak, DOHC 4 silinder segaris, 16 klep berpendingin cairan
        Kubikasi mesin 636cc,Torsi maks 70,8 Nm pada 11,000 rpm Transmisi 6 speed",
        "Dimensi" => "2.024 mm P x 710 mm L x 1.100 mm T",
        "Harga" => "Rp 317.000.000",
        "gambar" => "zx6.jpg"
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Type</th>
      <th scope="col">Produk</th>
      <th scope="col">Kapasitas Mesin</th>
      <th scope="col">Dimensi</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $book["gambar"]; ?>"></td>
      <td><?= $book["Type"] ?></td>
      <td><?= $book["Produk"] ?></td>
      <td><?= $book["Kapasitas Mesin"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["Harga"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>