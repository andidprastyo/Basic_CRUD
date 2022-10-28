<?php

include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$query = "DELETE from mahasiswa WHERE id_mhs = '$id_mhs'";
mysqli_query($koneksi, $query);

header("location:index.php");
