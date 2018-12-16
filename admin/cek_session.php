<<<<<<< HEAD
<?php
   session_start();
   require_once("../conn.php");
   $username_admin = $_POST['username_admin'];
   $password = $_POST['password'];
   $email_admin = $_POST['email_admin'];   
   $sql = "SELECT * FROM admin_login WHERE username_admin = '$username_admin'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username_admin'] = $hasil['username_admin'];
       header('location:index.php');
     }
   }
=======
<?php
   session_start();
   require_once("conn.php");
   $username_admin = $_POST['username_admin'];
   $password = $_POST['password'];
    $sql = "SELECT * FROM admin_login WHERE username_admin = '$username_admin'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username_admin'] = $hasil['username_admin'];
       header('location:index.php');
     }
   }
>>>>>>> a4a00bfd4a5d0b082413c82e8f767814f0c59f84
?>