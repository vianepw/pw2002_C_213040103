<?php 
$mahasiswa = [
  [
    "nama" => "Viane Pindhi Wardiyane",
    "npm" => "213040103",
    "email" => "pindhiviane25@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "aku item.jpeg"
   ],
   [
     "nama" => "Jeon Wonwoo",
     "npm" => "213040104",
     "email" => "jeonwonwoo@gmail.com",
     "jurusan" => "Teknik Elektro",
     "gambar" => "wonwoo1.jpg"
   ],
   [
     "nama" => "Vachirawit",
     "npm" => "213040105",
     "email" => "vachirawit25@gmail.com",
     "jurusan" => "Teknik Mesin",
     "gambar" => "bright1.jpg"
   ],
   [
     "nama" => "Hendery",
     "npm" => "213040106",
     "email" => "henderyaheng@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "hendery1.jpg"
   ],
   [
     "nama" => "Jaehyun",
     "npm" => "213040107",
     "email" => "jamaljaehyun@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "jaehyun1.jpg"
    ],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Detail Mahasiswa</h1>

      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/aku item.jpeg" class="img-fluid rounded-start" alt="Viane Pindhi Wardiyane">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Viane PIndhi Wardiyane</h5>
        <p class="card-text">213040103</p>
        <p class="card-text">pindhiviane25@gmail.com</p>
        <p class="card-text">Teknik Informatika</p>

        <a href="kuliah_latihan2.php"></a>
      </div>
    </div>
  </div>
</div>

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      

  </tbody>

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