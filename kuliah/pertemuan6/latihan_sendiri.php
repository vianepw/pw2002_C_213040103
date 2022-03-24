<?php
// $mahasiswa = [
//     ["Nadilla Ananda", "213040076", "nputriananda21@gmail.com", "Teknik Informatika"],
//     ["Jeon Wonwoo", "213040076", "jeonwonwoo@gmail.com", "Fakultas Kedokteran"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// Key-nya bukan index, tapi string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Viane Pindhi", 
        "nrp" => "213040103", 
        "email" => "pindhiviane25@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => "aku item.jpeg"
    ],
    [
        "nama" => "Jeon Wonwoo", 
        "nrp" => "213040104", 
        "email" => "jeonwonwoo@gmail.com",
        "fakultas" => "Fakultas Kedokteran",
        "gambar" => "wonwoo1.jpg"
    ],
    [
        "nama" => "Vachirawit", 
        "nrp" => "213040105", 
        "email" => "vachirawit25@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => "bright1.jpg"
    ],
    [
        "nama" => "Hendery", 
        "nrp" => "213040106", 
        "email" => "henderyaheng@gmail.com",
        "fakultas" => "Teknik Elektro",
        "gambar" => "hendery1.jpg"
    ],
    [
        "nama" => "Jaehyun", 
        "nrp" => "213040107", 
        "email" => "jaehyunjamal@gmail.com",
        "fakultas" => "Teknik Mesin",
        "gambar" => "jaehyun1.jpg"
    ],
    [
        "nama" => "Jeon Wonwoo", 
        "nrp" => "213040076", 
        "email" => "jeonwonwoo@gmail.com",
        "fakultas" => "Fakultas Kedokteran",
        "gambar" => "wonwoo1.jpg"
    ],
    [
        "nama" => "Viane Pindhi", 
        "nrp" => "213040103", 
        "email" => "pindhiviane25@gmail.com",
        "fakultas" => "Teknik Informatika",
        "gambar" => "aku item.jpeg"
    ],
    [
        "nama" => "Jeon Wonwoo", 
        "nrp" => "213040076", 
        "email" => "jeonwonwoo@gmail.com",
        "fakultas" => "Fakultas Kedokteran",
        "gambar" => "wonwoo1.jpg"
    ],
];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <body>
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $mhs["gambar"]; ?>">
                </li>
                <li>Nama : <?= $mhs["nama"]; ?></li>
                <li>NPM : <?= $mhs["nrp"]; ?></li>
                <li>Email : <?= $mhs["email"]; ?></li>
                <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>

<!-- MINIMAL 10 KASUS -->