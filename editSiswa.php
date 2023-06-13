<?php
include 'class/Siswa.php';

$siswa = new Siswa();
$dataSiswa = $siswa->viewById($_GET["id"]);

if (isset($_POST["submit"])) {
    $data = [
        "id_siswa" => $_POST["id_siswa"],
        "nama_siswa" => $_POST["nama_siswa"],
        "kelas" => $_POST["kelas"],
        "foto" => $_POST["photo"],
    ];
    
    $siswa = new Siswa;
    $siswa->edit_Siswa($data);
    if ($data > 0) {
        echo "
            <script>
                alert('Data siswa berhasil diedit');
                document.location.href = 'siswa.php';
            </script>
            ";
    } else {
      echo "
      <script>
          alert('Data siswa gagal diedit');
          document.location.href = 'siswa.php';
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
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<form action="" method="POST">
          <div class="row p-3">
              <div class="col-md-12 mb-4">
                  <input type="hidden" name="id_siswa" value="<?= $dataSiswa["id_siswa"]; ?>">
                  <label for="" class="form-label">Nama Siswa</label><br />
                  <input type="text" name="nama_siswa" class="form-control" value="<?= $dataSiswa["nama_siswa"]; ?>" required /><br /> <br />
                                             
                  <label for="" class="form-label">Kelas</label><br />
                  <input type="text" name="kelas" class="form-control" value="<?= $dataSiswa["kelas"]; ?>" required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="text" name="photo" class="form-control" value="<?= $dataSiswa["photo"] ?>" required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
</body>
</html>