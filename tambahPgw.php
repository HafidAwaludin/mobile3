<?php
require_once('koneksi.php');

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO pegawai(nama,jabatan,alamat) 
        VALUES('".$nama."','".$jabatan."','".$alamat."')";
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan Data';
}else{
    echo 'GAGAL Menambahkan Data';
}
mysqli_close($con);

?>