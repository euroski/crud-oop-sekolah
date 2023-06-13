<?php
require "class/Siswa.php";

if (isset($_POST["submit"])) {
    $data = [
    "nama_siswa" => $_POST["nama_siswa"],
    "kelas" => $_POST["kelas"],
    "photo" => $_POST["photo"]
    ];
    $siswa = new Siswa;
    $siswa->tambahSIswa($data);
    if ($data > 0) {
        echo "
            <script>
                alert('Yay!! Data barang berhasil ditambahkan');
                window.location = 'siswa.php';
            </script>
            ";
    } else {
      echo "
      <script>
          alert('Yha.. data gagal ditambahkan');
          window.location = 'siswa.php';
      </script>
      ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="mt-5">
    <h1 class="text-center" >Tambah Data Siswa</h1>
      <form action="" method="POST">
          <div class="row">
              <div class="col-md-8 offset-md-2">
                  <label for="" class="form-label">Nama Siswa</label><br />
                  <input type="text" name="nama_siswa" class="form-control"  required /><br /> <br />
                                             
                  <label for="" class="form-label">Kelas</label><br />
                  <input type="text" name="kelas" class="form-control"  required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="text" name="photo" class="form-control"  required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
  </div>
</body>
</html>