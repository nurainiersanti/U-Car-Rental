<?php
   session_start();
   require_once("conn.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM pelanggan WHERE username = '$username'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='index.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='index.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:home.php');
     }
   }
?>