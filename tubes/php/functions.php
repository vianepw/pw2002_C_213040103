<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die ('KONEKSI GAGAL');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query)or die (mysqli_error($conn));


    $rows = [];
    While($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }

    return $rows; 
}

function tambah($data) {
    $conn = koneksi();

    //jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar = 'default.jpg' ;
    } else {
        //jalankan fungsi upload gambar
        $gambar = upload();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    $nama_pasien = htmlspecialchars($data['nama_pasien']);
    $jenis_gejala=  htmlspecialchars($data['jenis_gejala']);
    $nama_dokter =  htmlspecialchars($data['nama_dokter']);
    $kelas_ruangan =  htmlspecialchars($data['kelas_ruangan']);
    
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO kesehatan VALUES ('', '$nama_pasien', '$jenis_gejala', 
    '$nama_dokter', '$kelas_ruangan', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function upload(){
	$filename = $_FILES['gambar']['name'];
	$filenametmp = $_FILES['gambar']['tmp_name'];
	$filesize = $_FILES['gambar']['size'];
	$filetype = pathinfo($filename,
		PATHINFO_EXTENSION);
	$allowedtype = ["jpg","jpeg","png"];

	//cek apakah file yang di upload bukan gambar
	if (!in_array($filetype, $allowedtype)) {
		echo "
		<script>
            alert('yang anda upload bukan gambar!!');
          </script>";
          return false;
	}

	//cek apakah ukuran
	if ($filesize>1000000) {
		echo "
		<script>
            alert('ukuran gambar terlalu besar!!');
          </script>";
          return false;
	}

	//lolos pengecekan
	$new_filename=uniqid() . $filename;
	move_uploaded_file($filenametmp, 'img/' . $new_filename);

	return $new_filename;
}

function hapus($id) {
    $conn = koneksi ();

    $kesehatan = query("SELECT * FROM kesehatan WHERE id = $id")[0];

    mysqli_query($conn, "DELETE FROM kesehatan WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function ubah($data) {
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama_pasien = htmlspecialchars($data['nama_pasien']);
    $jenis_gejala = htmlspecialchars($data['jenis_gejala']);
    $nama_dokter= htmlspecialchars($data['nama_dokter']);
    $kelas_ruangan= htmlspecialchars($data['kelas_ruangan']);
    $gambar = htmlspecialchars($data['gambar']);


    $query = "UPDATE kesehatan SET
               id = '$id',
               nama_pasien = '$nama_pasien',
               jenis_gejala = '$jenis_gejala',
               nama_dokter = '$nama_dokter',
               kelas_ruangan = '$kelas_ruangan',
               gambar = '$gambar'
            WHERE id = '$id'
               ";


    mysqli_query($conn, "$query") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function registrasi($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username yang dipilih sudah terdaftar!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
}

function cari ($keyword) {
    $query = "SELECT * FROM kesehatan
    WHERE 
  nama_pasien LIKE '%$keyword%',
  jenis_gejala LIKE '%$keyword%',
  nama_dokter LIKE '%$keyword%',
  kelas_ruangan LIKE '%$keyword%'
  ";

    return query($query);
}