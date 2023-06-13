<?php
    require "class/Siswa.php";

    $id = $_GET["id"];

    $siswa = new Siswa;
    $siswa->hapus_Siswa($id);
    header("location: siswa.php");

?>