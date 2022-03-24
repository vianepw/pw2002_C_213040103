<?php
// $mahasiswa = [
//     ["Viane Pindhi", "213040103", "pindhiviane25@gmail.com", "Teknik Informatika"],
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
        "nrp" => "213040076", 
        "email" => "jeonwonwoo@gmail.com",
        "fakultas" => "Fakultas Kedokteran",
        "gambar" => "wonwoo1.jpg"
    ]
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