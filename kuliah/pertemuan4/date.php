<!-- //untuk hari l
//untuk tanggal d
//M untuk bulan huruf
//m untuk bulan angka -->
<?php
//date 
// untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
?>

<?php
//time
//UNIX Timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970 
// echo time();
echo date("l", time() +60*60*24*100);
// 60 detik 
// 60 menit 
// 24 jam = 1 hari 
// 100 hari lagi hari apa
echo date("d M Y", time() +60*60*24*100);
?>

<?php 
//mktime
//membuat sendiri detik 
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun 
echo mktime(0,0,0,11,25,2002);
echo date("l", mktime(0,0,0,11,25,2002));
?>

<?php
// strtotime
echo date ("l", strtotime("25 nov 2002"));
?>
