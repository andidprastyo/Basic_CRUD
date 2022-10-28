<?php

include 'koneksi.php';

$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jenis_kelamin = '$jenis_kelamin', jurusan = '$jurusan', alamat = '$alamat' WHERE id_mhs = '$id_mhs'";
mysqli_query($koneksi, $query);

if(mysqli_affected_rows($koneksi) > 0){
    echo "Data berhasil diubah";
}else{   
    echo "Data gagal diubah";
}


header("location:index.php");
