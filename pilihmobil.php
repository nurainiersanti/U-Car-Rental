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
    <link href="asset/css/style.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="asset/css/stylepilihmobil.css">
    <link rel="stylesheet" href="asset/css/bootstrap-min.css">
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset/js/style.js"></script>
  </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <a class="navbar-brand" href="index.php">
            <img src="asset/image/ucar.png" width="150" height="30" class="rounded float-left" alt=" ">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Home
                    <span class="sr-only">Current</span>
                </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pesan.php">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sk.html">Syarat & Ketentuan</a>
                </li>
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
      <div id="header">
        <h2>Pilih Mobil</h2>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="satuduatiga btn-primary non-active" style="cursor:not-allowed">
              1
            </label>
            <label class="satuduatiga btn-primary active">
              2
            </label>
            <label class="satuduatiga btn-primary non-active" style="cursor:not-allowed">
              3
            </label>
          </div>
      </div>


    </div>

    <div class="album py-4">
            <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm" style="margin-top:2px !important">
                                <div class="thumbnail">
                                    <img src="asset/image/avanza.png" alt="Thumbnail [100x210]">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Toyota Avanza</h6>
                                    <h6 class="card-title">Rp. 300.000</h6>
                                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                    <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm" style="margin-top:2px !important">
                                <div class="thumbnail">
                                    <img src="asset/image/mobilio 2.png" alt="Thumbnail [100x210]">
                                </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Honda Mobilio</h6>
                                        <h6 class="card-title">Rp. 500.000</h6>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-4 shadow-sm" style="margin-top:2px !important">
                                    <div class="thumbnail">
                                        <img src="asset/image/innova1.png" alt="Thumbnail [100x210]">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Kijang Innova</h6>
                                        <h6 class="card-title">Rp. 300.000</h6>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card card mb-4 shadow-sm" style="margin-top:2px !important">
                                    <div class="thumbnail">
                                        <img src="asset/image/freed.png" alt="Thumbnail [100x210]">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Honda Freed</h6>
                                        <h6 class="card-title">Rp. 300.000</h6>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card card mb-4 shadow-sm" style="margin-top:2px !important">
                                    <div class="thumbnail">
                                        <img src="asset/image/jazz.jpg" alt="Thumbnail [100x210]">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Honda Jazz</h6>
                                        <h6 class="card-title">Rp. 250.000</h6>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card card mb-4 shadow-sm" style="margin-top:2px !important">
                                    <div class="thumbnail">
                                         <img src="asset/image/ertiga.jpg" alt="Thumbnail [100x210]">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">Suzuki Ertiga</h6>
                                        <h6 class="card-title">Rp. 300.000</h6>
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <a href="pembayaran.php" class="btn btn-primary" style="margin-left: 190px">Order</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                 </div>
            </div>
    </div>
</body>
</html>
