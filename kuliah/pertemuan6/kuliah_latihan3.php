<?php 
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
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>
          <img src="img/aku item.jpeg" height="50"
          class="rounded-circle">
      </td>
      <td>Viane Pindhi</td>
      <td>213040103</td>
      <td>pindhiviane25@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>
          <img src="img/wonwoo1.jpg" height="50"
          class="rounded-circle">
      </td>
      <td>Jeon Wonwoo</td>
      <td>213040104</td>
      <td>jeonwonwoo@gmail.com</td>
      <td>Teknik Elektro</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>
          <img src="img/bright1.jpg" height="50"
          class="rounded-circle">
      </td>
      <td>Vachirawit</td>
      <td>213040105</td>
      <td>vachirawit25@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>
          <img src="img/hendery1.jpg" height="50"
          class="rounded-circle">
      </td>
      <td>Hendery</td>
      <td>213040106</td>
      <td>Henderyaheng@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>
          <img src="img/jaehyun1.jpg" height="50"
          class="rounded-circle">
      </td>
      <td>Jaehyun</td>
      <td>213040106</td>
      <td>jaehyunjamal@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>

  </tbody>
</table>

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