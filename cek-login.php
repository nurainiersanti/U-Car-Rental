<?php
   session_start();
   require_once("conn.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM pelanggan WHERE username = '$username'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
    echo "<script>alert('Username Belum Terdaftar, Silahkan Daftar Terlebih Dahulu')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.php'>";
   } else {
     if($password <> $hasil['password']) {
      echo "<script>alert('Password Salah')</script>";
      echo "<meta http-equiv='refresh' content='1 url=index.php'>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:home.php');
     }
   }
?>