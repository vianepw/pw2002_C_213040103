<?php
require 'functions.php';


$kesehatan = query("SELECT * FROM kesehatan");

//query sesaui dengan keyword pencarian
if ( isset($_POST["cari"]) ) {
  $keyword = $_POST['keyword'];
  $query = "SELECT * FROM kesehatan
        WHERE 
      nama_pasien LIKE '%$keyword%' OR
      jenis_gejala LIKE '%$keyword%' OR
      nama_dokter LIKE '%$keyword%' OR
      kelas_ruangan LIKE '%$keyword%'
      ";

  $kesehatan = query($query);
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Yupi Sehat</title>
    <style>
 	  .foto {
 		width: auto;
 		height: 50px;
 	   }
 </style>
</head>

<body>
<!-- Awal Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #3B3738 ;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="" width="35" height="35" class="d-inline-block">
            Yupi <strong>Admin</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="pelayananadmin.html">Beranda</a>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
        </div>
    </div>
  </nav>
    <!-- Akhir Navbar-->

    <div class="container">
        <h1>Daftar Pasien</h1>

        <a href="tambah.php" class="btn btn-primary">Tambah data Pasien</a>
        <form action="" method="post" class="mt-4">
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus>
          <button class="btn btn-primary" type="submit" name="cari">cari</button>
          </div>
        </form>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Jenis Gejala</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Kelas Ruangan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($kesehatan as $ksh) { ?>
              <tr>
                <td scope="row"> <?= $no++;  ?> </td>
                <td> <img src="img/<?php echo $ksh["gambar"]; ?>" class="rounded-circle foto" ></td>
                <td><?php echo $ksh['nama_pasien'] ?></td>
                <td><?php echo $ksh['jenis_gejala'] ?></td>
                <td><?php echo $ksh['nama_dokter'] ?></td>
                <td><?php echo $ksh['kelas_ruangan'] ?></td>
                <td>
                <a href="ubah.php?id=<?= $ksh ["id"];?>" class="btn badge bg-warning">Ubah</a>
                <a href="hapus.php?id=<?= $ksh ["id"];?>" class="btn badge bg-danger" onclick="return confirm ('Serius di hapus ?');">Hapus</a>
                </td>
              </tr>
              <?php } ?>
        </tbody>
        </table>
    </div>
  </div>

  <div class="container">
        <button class="hidden btn btn-danger mt-3" onclick="window.print()">
        <i class="bi bi-journal-plus">Cetak PDF</i>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>