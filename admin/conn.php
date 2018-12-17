<?php 

function connection() {
   // membuat konekesi ke database system
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "rentalmobil";

   $conn = new mysqli($hostname, $username, $password);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error());
   }
   //memilih database yang akan dipakai
   mysqli_select_db($conn,$dbname);
	
   return $conn;
}
