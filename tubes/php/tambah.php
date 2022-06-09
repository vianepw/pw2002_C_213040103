<?php 
require 'functions.php';

// cek ketika tombol tambah di-klik
if(isset($_POST['tambah'])) {

if(tambah($_POST) > 0) {
    echo "<script> 
            alert('data berhasil ditambahkan!')
            document.location.href = 'admin.php';
    </script>";
}

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

    <title>Tambah data Pasien</title>
  </head>
  <body>

<!-- Awal Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #3B3738;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="" width="35" height="35" class="d-inline-block">
            Yupi <strong>sehat</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="pelayanan.html">Beranda</a>
                <li class="nav-item">
                  <a class="nav-link" href="registrasi.php">Daftar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Masuk</a>
                </li>
              </ul>
        </div>
    </div>
  </nav>
    <!-- Akhir Navbar-->

  <div class="container">
      <h1>Tambah Daftar Pasien</h1>

      <a href="index.php" class="btn btn-primary">Kembali ke Daftar Pasien</a>

      <div class="row  mt-3">
          <div class="col-8">

          <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label for="nama_pasien" class="form-label">Nama Pasien</label>
                  <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
              </div>

              <div class="mb-3">
                  <label for="jenis_gejala" class="form-label">Jenis Gejala</label>
                  <input type="text" class="form-control" id="jenis_gejala" name="jenis_gejala">
              </div>

              <div class="mb-3">
                  <label for="nama_dokter" class="form-label">Nama Dokter</label>
                  <input type="text" class="form-control" id="nama_dokter" name="nama_dokter">
              </div>

              <div class="mb-3">
                  <label for="kelas_ruangan" class="form-label">Kelas Ruangan</label>
                  <input type="text" class="form-control" id="kelas_ruangan" name="kelas_ruangan">
              </div>

              <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="gambar" name="gambar">
              </div>

              <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>

          </form>
          </div>
      </div>
 

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