<?php
include 'conn.php';

$status = '';
//melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    //query SQL
    $query = "INSERT INTO pinjam (tgl_pinjam, tgl_kembali) VALUES('$tgl_pinjam','$tgl_kembali')"; 

    //eksekusi query
    $result = $conn->query($query);
    if ($result) {
      $status = 'berhasil';
    }
    else{
      $status = 'error';
    }

    header("location:pilihmobil.php");
}


?>