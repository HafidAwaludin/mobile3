<?php
require_once('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM pegawai 
        WHERE id =".$id."";

if(mysqli_query($con,$sql)){
    echo "Data Berhasil di HAPUS";
}else{
    echo "Data GAGAL di HAPUS";
}
mysqli_close($con);
?>