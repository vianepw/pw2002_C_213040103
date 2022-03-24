<?php 
//array associattive
// array yang indexnya string

$mahasiswa = [
    [
     "nama" => "Viane Pindhi Wardiyane",
     "npm" => "213040103",
     "email" => "pindhiviane25@gmail.com",
     "jurusan" => "Teknik Informatika"
    ],
    [
     "nama" => "Nadilla Ananda", 
     "npm" => "213040076",
     "email" => "nadilla.21304010076@mail.unpas.ac.id",
     "jurusan" => "Teknik Industri"
    ]
];

// var_dump($mahasiswa[1][])
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"] ?> </li>
    <li>NPM : <?php echo $mhs["npm"] ?> </li>
    <li>Email : <?php echo $mhs["email"] ?> </li>
    <li>Jurusan : <?php echo $mhs["jurusan"] ?> </li>
</ul>
<?php } ?>

<hr>
<?php foreach($mahasiwa as $mhs) { ?>
    <ul>
        <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>; <?php echo $value; ?></li>
        <?php } ?>
    </ul> 
<?php } ?>
        </hr>