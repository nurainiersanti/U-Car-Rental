<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  $status = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['username'])) {
          //query SQL
          $username_upd = $_GET['username'];
          $query = "SELECT * FROM pelanggan WHERE username = '$username'"; 

          //eksekusi query
          $result = $conn->query($query);
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $conf_pass = $_POST['conf_pass'];
    $ktp = $_FILES['ktp']['name'];
    $sim = $_FILES['sim']['name'];
      //query SQL
      $sql = "UPDATE pelanggan SET nama='$nama', email='$email', no_telp='$no_telp', alamat='$alamat', password='$password', conf_pass='$conf_pass', ktp='$ktp', sim='$sim' WHERE username='$username'";

      //eksekusi query
      $result = $conn->query($query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: home.php?status='.$status);
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <title>RENTAL MOBIL ONLINE</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/stylehome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css">
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset/js/style.js"></script>
  </head>
<body>
<?php 
          //proses menampilkan data dari database:
          //siapkan query SQL
          $query = "SELECT * FROM pelanggan WHERE username = '$username'";
          $result = $conn->query($query);
      ?>
      <?php while($data = mysqli_fetch_array($result)): ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <a class="navbar-brand" href="#">
            <img src="asset/image/ucar.png" width="150" height="30" class="rounded float-left" alt=" ">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home </a>
                        <span class="sr-only">Current</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pesan.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sk.html">Syarat & Ketentuan</a>
                </li>
            </ul>
        </div>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $data['nama'];  ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="gantipass.php">Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out">Sign Out</i></a>
              </div>
            </div>
          </li>
        </ul>
    </nav>
<?php endwhile;?>
    <div class="container">
        <div id="header" style="margin-top:50px;">
            <h2>User Profile</h2>
        </div>
    <div class="jumbotron" style="margin-top:30px;">
    
        <form action="profile-edit.php" name="daftar" method="POST">
                                    <div class="form-group">
                                            <label for="name" class="col-form-label">Nama</label>
                                                <input type="text"  readonly class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $data['nama'];  ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname" class="col-form-label">Username</label>
                                            <input type="text" readonly class="form-control" name="username" placeholder="<?php echo $data['username'];  ?>" value="<?php echo $data['username'];  ?>">
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="example@mail.com" value="<?php echo $data['email'];  ?>" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp" class="col-form-label">No. Telepon</label>
                                            <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon" value="<?php echo $data['n0_telp'];  ?>" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="col-form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" value="<?php echo $data['alamat'];  ?>" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sandi" class="col-form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data['password'];  ?>" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Password harus berisi maksimal 10 karakter menggunakan huruf maupun angka, tidak boleh ada spasi, special characters, atau emoji.
                                            </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="repassword" class="col-form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="conf_pass" placeholder="Password" value="<?php echo $data['conf_pass'];  ?>" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <label for="ktp" class="col-form-label">Foto/Scan KTP</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp" value="<?php echo $data['ktp'];  ?>" required>
                                                <label class="custom-file-label" for="ktp">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    <label for="sim" class="col-form-label"><br>Foto/Scan SIM</label></br>
                                        <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="sim" value="<?php echo $data['sim'];  ?>" required>
                                                    <label class="custom-file-label" for="sim">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
</div>
    </div>
  </body>
</html>