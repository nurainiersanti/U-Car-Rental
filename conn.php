<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "rentalmobil";
   $conn = new mysqli($hostname, $username, $password, $dbname);

   $dir_gambar = 'C:\xampp\htdocs\U-Car-Rental\img\\'; //direktori dalam server
    $url_folder_gambar = 'http://localhost/U-Car-Rental/img/';  //URL dari direktori jika diakses lewat browser
?>  