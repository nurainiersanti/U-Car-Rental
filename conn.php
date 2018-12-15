<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "rentalmobil";
   $conn = new mysqli($hostname, $username, $password, $dbname);

   $dir_gambar = 'C:\xampp\htdocs\U-Car-Rental\ktp\\'; //direktori dalam server
    $url_folder_gambar = 'http://localhost/U-Car-Rental/ktp/';  //URL dari direktori jika diakses lewat browser
    $dir_gambar = 'C:\xampp\htdocs\U-Car-Rental\sim\\'; //direktori dalam server
    $url_folder_gambar = 'http://localhost/U-Car-Rental/sim/';  //URL dari direktori jika diakses lewat browser
?>  