<?php 
// $mahasiswa = ["Viane Pindhi Wardiyane", "21304103", "Teknik Informatika", "pindhiviane25@gmail.com"];

// Array Multidimensi = Array didalam Array
$mahasiswa = [
    ["Viane Pindhi Wardiyane", "213040103", "Teknik Informatika",
     "nputriananda21@gmail.com"],
    ["Nadilla Ananda", "213040072", "Teknik Informatika",
     "nadillaananda@gmail.com"],
    ["Frimawan", "213040076", "Antropologi", "frimawanjadoel@gmail.com"]
];



?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <body>

            <h1> Daftar Mahasiswa</h1>

            <ul>
                <!-- <li>Viane Pindhi Wardiyane</li>
                <li>213040103</li>
                <li>Teknik Informatika</li>
                <li>pindhiviane25@gmail.com</li> -->

                <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
                    <li><?= $mhs; ?></li>
                <?php endforeach; ?> -->

                <!-- <li><?= $mahasiswa[0]; ?></li>
                <li><?= $mahasiswa[1]; ?></li>
                <li><?= $mahasiswa[2]; ?></li>
                <li><?= $mahasiswa[3]; ?></li> -->
                
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>NRP : <?= $mhs[1]; ?></li>
                <li>Jurusan : <?= $mhs[2]; ?></li>
                <li>Email : <?= $mhs[3]; ?></li>

            </ul>
            <?php endforeach; ?>
        </body>
    </head>
</html>