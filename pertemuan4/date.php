<?php
/*
Ericko Timur Apandi
203040127
https://github.com/etacodes/pw2021_203040127
Pertemuan 4 - 21 Februari 2021
Belajar mengenai function pada PHP
*/

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// TIME
// UNIX Timestamp / EPOCH time
// detik yag sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
echo date("l", strtotime("25 aug 1985"));
?>