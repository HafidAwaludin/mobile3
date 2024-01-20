<?php
require_once('koneksi.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$sql = "UPDATE pegawai
        SET nama    = '".$nama."',
            jabatan = '".$jabatan."',
            alamat  = '".$alamat."' 
      WHERE id = ".$id." ";

if(mysqli_query($con,$sql)){
    echo 'Berhasil MENGUBAH Data';
}else{
    echo 'GAGAL MENGUBAH Data';
}
mysqli_close($con);

?>