<?php

require_once('koneksi.php');

$sql = "SELECT * FROM pegawai";
$r = mysqli_query($con,$sql);

$result = array();
while($row = mysqli_fetch_array($r))
{
    array_push($result,array(
        "id"=>$row['id'],
        "nama"=>$row['nama'],
        "jabatan"=>$row['jabatan'],
        "alamat"=>$row['alamat']

    ));
}

echo json_encode(array('result'=>$result));
mysqli_close($con);

?>