<?php 
// SUPERGLOBLS
// Variabel milik PHP yang bisa kita gunakan
// bentuknya array associative
// $_GET 
// $_POST
// $_SERVER
// $_GET["nama"] = "Viane";
// $_GET["email"] = "pindhiviane25@gmail.com";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])){
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidak Diketahui!';
}


?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Xabiru">Xabiru</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Chava">Chava</a>
    </li>
</ul>