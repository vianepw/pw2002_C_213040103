<?php 
// arrray Associative
//array yang index-nya berasosiasi /berpasangan dengan angka

$mahasiswa = [
    ["Viane Pindhi Wardiyane"  , "213040103" , "pindhiviane25@gmail.com" , "Teknik Informatika"],
    ["Nadilla Ananda" , "213040072" , "nadilla.21304010076@mail.unpas.ac.id" , "Teknik Industri"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?> </li>
    <li>NPM : <?php echo $mhs[1] ?> </li>
    <li>Email : <?php echo $mhs[2] ?> </li>
    <li>Jurusan : <?php echo $mhs[3] ?> </li>
</ul>
<?php } ?>

