<?php

// variable 
// tempat penyimpanan nilai 

// mama bebas, tidak boleh ada spasi
// boleh ada angka tapi tidak di awal
$nama = "Viane";
echo $nama;
echo "<hr>";

//operator
// artitmatika 
// *, /, +, -, %
echo 10 * 10;
echo "<br>";
echo 10 / 5;
echo "<hr>";


// perbandingan 
// <, >, <=, >=, ==, !=
echo 1 < 2; //true /1
echo "<br>";
echo 10 < 5; //false /null 
echo "<br>";
echo 10 == "10";

// idenntitas 
// ===, !==
// mengecek nilai berserta tipe data nya
echo 10 === "10";
echo "<hr>";

//increment / decrement 
// penambahan / pengurangan
// ++, --
$x = 10;
echo $x++;
echo "<br>";
echo --$x;

// concat, penggabung string 
// .
$nama_depan = "Viane";
$nama_belakang = 'Pindhi';
echo $nama_depan ." ". $nama_belakang;
?>