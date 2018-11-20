<?php 
  include('conn.php');
  $nama = $_POST['nama']; 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];
  $conf_pass = $_POST['conf_pass'];
  $ktp = $_POST['ktp'];
  $sim = $_POST['sim'];
  $sql = "SELECT * FROM pelanggan WHERE username = '$username'";
  $query = $conn->query($sql);
  if($query->num_rows != 0) {
    echo "<div align='center'>Username Sudah Terdaftar! <a href='index.php'>Back</a></div>";
  } else {
    if(!$username || !$password) {
      echo "<div align='center'>Masih ada data yang kosong! <a href='index.php'>Back</a>";
    } else {
      $data = "INSERT INTO pelanggan (nama, username, email, no_telp, alamat, password, conf_pass, ktp, sim) VALUES ('$nama', '$username', '$email', '$no_telp', '$alamat', '$password', '$conf_pass', '$ktp', '$sim')";
      $simpan = $conn->query($data);
      if($simpan) {
        echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
      } else {
        echo "<div align='center'>Proses Gagal!</div>";
      }
    }
  }
?>