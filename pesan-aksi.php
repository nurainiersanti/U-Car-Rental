<?php
include 'conn.php';

$status = '';
//melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $durasi_pinjam = $_POST['durasi_pinjam'];
    $tujuan_pergi = $_POST['tujuan_pergi'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $mobil_jenis = $_POST['mobil_jenis'];
    //query SQL
    $query = "INSERT INTO pinjam (durasi_pinjam, tujuan_pergi, tgl_pinjam, mobil_jenis) VALUES('$durasi_pinjam','$tujuan_pergi','$tgl_pinjam','$mobil_jenis')"; 

    //eksekusi query
    $result = mysqli_query(connection(),$query);
    if ($result) {
      $status = 'berhasil';
    }
    else{
      $status = 'error';
    }

    header("location:pilihmobil.php");
}


?>