<?php
include 'conn.php';

$status = '';
//melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama_pelanggan = $_POST['Nama_pelanggan'];
    $Alamat_pelanggan = $_POST['Alamat_pelanggan'];
    $Nik_pelanggan = $_POST['Nik_pelanggan'];
    $Telp_pelanggan = $_POST['Telp_pelanggan'];
    $Fasilitas = $_POST['Fasilitas'];
    $Alamat_jemput = $_POST['Alamat_jemput'];
    $Waktu_jemput = $_POST['Waktu_jemput'];
    //query SQL
    $query = "INSERT INTO penjemputan (Nama_pelanggan, Alamat_pelanggan, Nik_pelanggan, Telp_pelanggan, Fasilitas, Alamat_jemput, Waktu_jemput)
    VALUES('$Nama_pelanggan','$Alamat_pelanggan','$Nik_pelanggan','$Telp_pelanggan','$Fasilitas','$Alamat_jemput','$Waktu_jemput')"; 

    //eksekusi query
    $result = $conn->query($query);
    if ($result) {
      $status = 'berhasil';
    }
    else{
      $status = 'error';
    }

    header("location:konfirmasipembayaran.php");
}
?>