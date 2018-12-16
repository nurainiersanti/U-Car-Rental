<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  session_start();
  if (!isset($_SESSION['username'])){
    header ("index.php");
  }else { 
   $username = $_SESSION['username']; 
  }
?>

<!DOCTYPE html>
<html lang="en">
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
    
    <div class="container">
    <div id="header" style="margin-top:50px;">
      <h2>User Profile</h2>
    </div>
    <div class="jumbotron" style="margin-top:30px;">
      <div class="table-responsive" style="margin-top:20px;">
                                <table class="table table-striped table-sm">
                                  <thead>
                                    <tr>
                                      <th>Nama</th>
                                      <th>Username</th>
                                      <th>Email</th>
                                      <th>No Telp</th>
                                      <th>Alamat</th>
                                      <th>Password</th>
                                      <th>KTP</th>
                                      <th>SIM</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>

                                  <tbody>
      
          <tr>
              <td><?php echo $data['nama'];  ?></td>
              <td><?php echo $data['username'];  ?></td>
              <td><?php echo $data['email'];  ?></td>
              <td><?php echo $data['no_telp'];  ?></td>
              <td><?php echo $data['alamat'];  ?></td>
              <td><?php echo $data['password'];  ?></td>
              <td class="align-middle text-center">
                  <img src="asset/image/<?php echo $data['ktp']; ?>" width="633">
              </td>
              <td class="align-middle text-center">
                  <img src="asset/image/<?php echo $data['sim']; ?>" width="633">
              </td>
              
              <td>
                  <a href="<?php echo "profile-edit.php?username=".$data['username']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                  &nbsp;&nbsp;
                  <a href="<?php echo "delete.php?username=".$data['username']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
              </td>
          </tr>
      <?php endwhile ?>


      </div>
</div>
    </div>
  </body>
</html>
