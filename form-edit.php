<?php

include 'koneksi.php';

$id_mhs = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('Teknik Informatika', 'Teknik Industri', 'Teknik Mesin');

function active_radio_button($value, $input){
    $result = $value == $input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
        <table>
            <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
            <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
            <tr><td>JENIS KELAMIN</td><td>
                    <input type="radio" nama="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-laki
                    <input type="radio" nama="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
                </td></tr>
            <tr><td>JURUSAN <?php echo $row['jurusan'];?></td><td>
                <select name="jurusan">
                    <?php
                    foreach ($jurusan as $j) {
                        echo "<option value='$j'";
                        echo $row['jurusan'] == $j?'selected':'';
                        echo ">$j</option>";
                    }
                    ?>
                </select>
            </td></tr>
            <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td></tr>
            <tr><td colspan="2"><button type="submit" name="submit" value="simpan">SIMPAN PERUBAHAN</button>   
            <a href="index.php">KEMBALI</a></td></tr>
        </table>
    </form>
</body>
</html>