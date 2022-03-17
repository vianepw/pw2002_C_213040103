<?php

// Pertemuan 5, Video Youtube - ARRAY.
// 1. Variabel yang dapat memiliki banyak nilai.
// 2. Elemen pada array boleh memiliki tipe data yang berbeda, Contoh
//    pada no.15.
// 3. var_dump = pasangan antara key dan value
//    key-nya adalah index, yang dimulai dari 0
// 4. Array Numerik = Array yang pasangannya angka
// 5, Array Asosiatif = dimana indexnya bukan dari angka, tapi string

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// Cara Baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];
// no.15 = angka, string, boolean

// Menampilkan Array
// var_dump() / print_r()s
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1]

// // Menambahkan Array baru pada array
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jum'at";
// echo "<br>";
// var_dump($hari);

?>