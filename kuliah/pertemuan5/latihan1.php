<?php
// pertemuan 5- array
// array adalah variable yang bisa menampung/menyimpan banyak nilai sekaligus 

$hari1 = "Senin"; 
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa = "Viane";

//membuat array
$hari = ["Senin" , "Selasa" , "Rabu"]; // cara baru
$bulan = array("Januari", "Februari" , "Maret");
$myArray = [10, "Viane", true];

//mencetak ARRAY
// mencetak 1 elemen di dalam array , menggunakan index 
// index di dalam array dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";

//mencetak menggunakan var_dump() atau print_r()
//khusus untuk debugging 
var_dump ($hari);
echo "<br>";
print_r ($bulan);
echo "<hr>";

//mencetak semua isi array menggunakan looping 
//for 
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach 
foreach($bulan as $b) {
    echo $b; 
    echo "<br>";
}
echo "<hr>";
foreach ($bulan as $key => $value) {
    echo "key: $key - value: $value";
    echo "<br>";
}

echo "<hr>";
//memanipulasi array
//menambah elemen baru di akhir array
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);


?>