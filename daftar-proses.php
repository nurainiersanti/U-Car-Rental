<?php 
  include('conn.php');
  $nama = $_POST['nama']; 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $no_telp = $_POST['no_telp'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];
  $conf_pass = $_POST['conf_pass'];
  $ktp = $_FILES['ktp']['name'];
  $sim = $_FILES['sim']['name'];
  $sql = "SELECT * FROM pelanggan WHERE username = '$username'";
  $query = $conn->query($sql);
  if($query->num_rows != 0) {
    echo "<script>alert('Username Sudah Ada, Silahkan Pilih Username Lain')</script>";
  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
  } else {
    if(!$username || !$password) {
      echo "<script>alert('Masih Ada Data yang Kosong')</script>";
    echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    } else {
      $data = "INSERT INTO pelanggan (nama, username, email, no_telp, alamat, password, conf_pass, ktp, sim) VALUES ('$nama', '$username', '$email', '$no_telp', '$alamat', '$password', '$conf_pass', '$ktp', '$sim')";
      $simpan = $conn->query($data);
      move_uploaded_file($_FILES['ktp']['tmp_name'],'/assets/image/'.$ktp);
      move_uploaded_file($_FILES['sim']['tmp_name'],'/assets/image/'.$sim);
      if($simpan) {
        echo "<script>alert('Pendaftaran Berhasil, Silahkan Login')</script>";
      echo "<meta http-equiv='refresh' content='1 url=index.php'>";
      } else {
        echo "<script>alert('Gagal Mendaftar')</script>";
      }
    }
  }
?>