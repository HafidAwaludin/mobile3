<?php

    include "koneksi.php";
    $id = isset($_POST ['id']) ? $_POST['id'] : '';

    if (empty($id)){
        echo"id tidak boleh kosong";

    }else
    {
        $query = mysqli_query($con, " DELETE FROM pegawai WHERE id = '".$id."'");

        if ($query){
            echo "Data berhasil di hapus";

        }else{
            echo "Gagal Menghapus Data";
        }
    }
?>