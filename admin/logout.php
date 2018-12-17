<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  session_start();
  session_destroy();
  echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>