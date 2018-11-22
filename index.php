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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <a class="navbar-brand" href="#">
            <img src="asset/image/ucar.png" width="150" height="30" class="rounded float-left" alt=" ">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home </a>
                        <span class="sr-only">Current</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pilihmobil.html">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sk.html">Syarat & Ketentuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Hubungi Kami </a>
                </li>
            </ul>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#daftar">
                    <b>Daftar</b>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="title">DAFTAR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="daftar-proses.php" name="daftar" method="POST">
                                    <div class="form-group">
                                            <label for="name" class="col-form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="uname" class="col-form-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="example@mail.com" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tlp" class="col-form-label">No. Telepon</label>
                                            <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="col-form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sandi" class="col-form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                Password harus berisi maksimal 10 karakter menggunakan huruf maupun angka, tidak boleh ada spasi, special characters, atau emoji.
                                            </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="repassword" class="col-form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="conf_pass" placeholder="Password" required>
                                            <div class="invalid-tooltip">
                                                Harus Diisi.
                                            </div>
                                    </div>
                                    <label for="ktp" class="col-form-label">Foto/Scan KTP</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ktp" required>
                                                <label class="custom-file-label" for="ktp">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    <label for="sim" class="col-form-label"><br>Foto/Scan SIM</label></br>
                                        <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="sim" required>
                                                    <label class="custom-file-label" for="sim">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login">
                            <b>Login</b></button>
                            <!-- Modal -->
                            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLongTitle">LOGIN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
									        <form method="POST" name="login" action="cek-login.php">
                                                <div class="form-group">
                                                    <label class="col-form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                    <label class="form-check-label" for="autoSizingCheck2">
                                                        Remember me
                                                    </label>
                                                </div>
                                                <div class="modal-footer">
                                                    <input class="btn btn-primary" type="submit" value="Login">
                                                </div>
                                            </form>
								        </div>
                                    </div>
                                </div>
                            </div>
        </ul>
    </nav>
    <div class="col-md-12 col-sm-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/image/mobil.jpg" alt="First slide" style="width:250px; height: auto; border: none;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/image/mobil2.jpg" alt="Second slide" style="width:250px; height: auto;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/image/mobil3.jpg" alt="Third slide" style="width:250px; height: auto;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><br> <br>

    <center><h3>WHY YOU CHOOSE ME?<center></h3><br><br>
    <div class="container">
	    <div class="row">
	        <div class="col-md-4 justify-content-center" id="logo1">
		        <div class="row justify-content-center">
                    <img src="asset/image/harga murah.png" style="width: 120px; height: 120px;">
	            </div>
	            <div class="row justify-content-center">
	                <h4 style="text-align:center;"><b><br>Jaminan Harga Termurah </h4></b>
	            </div>
	            <div class="row justify-content-center">
	                <h6 style="text-align:center;"> Hemat Biaya Untuk Sewa Mobil Anda </h6>
	            </div>
	        </div>
	        <div class="col-md-4 justify-content-center" id="logo2">
		        <div class="row justify-content-center">
                    <img src="asset/image/pesan.png" style="width: 120px; height: 120px;">
	            </div>
	            <div class="row justify-content-center">
	                <h4 style="text-align:center;"><b><br>Pemesanan Online Mudah </h4></b>
	            </div>
	            <div class="row justify-content-center">
	                <h6 style="text-align:center;"> Mudah Dalam Pemesanan Mobil </h6>
	            </div>
	        </div>
	        <div class="col-md-4 justify-content-center" id="logo3">
		        <div class="row justify-content-center">
                    <img src="asset/image/aman.png" style="width: 120px; height: 120px;">
	            </div>
	            <div class="row justify-content-center">
	                <h4 style="text-align:center;"><b><br>Jaminan untuk setiap Pemesanan </h4></b>
	            </div>
	            <div class="row justify-content-center">
	                <h6 style="text-align:center;"> Kami memantau setiap pemesanan untuk memastikan
	                Anda mendapatkan <br> Mobil yang anda pilih </h6>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="row" style="margin-top:45pt!important;">
	    <div class="col-md-4 offset-2">
	        <div class="col-md-4 justify-content-center" id="logo4">
		        <div class="row justify-content-center">
                    <img src="asset/image/cs.png" style="width: 120px; height: 120px;"></div>
	            </div>
	            <div class="row justify-content-center">
	                <h4 style="text-align:center;"><b><br>Kami Siap Melayani 24 Jam </h4></b>
	            </div>
	            <div class="row justify-content-center">
	                <h6 style="text-align:center;"> Kami nyata dan ada sepanjang waktu, dimana saja. <br>Hubungi Kami.</h6>
	            </div>
	        </div>
	        <div class="col-md-4 justify-content-center" id="logo5">
		        <div class="row justify-content-center">
                    <img src="asset/image/kursi mobil.png" style="width: 120px; height: 120px;">
	            </div>
	            <div class="row justify-content-center">
	                <h4 style="text-align:center;"><b><br>Kualitas Terjamin</h4></b>
	            </div>
	            <div class="row justify-content-center">
	                <h6 style="text-align:center;">Mobil Bersih dan nyaman saat digunakan.</h6>
	            </div>
	        </div>
        </div>
    </div>

    <div class="bg-secondary text-white">
        <center><br><h3><p style="margin-right:880px; color:white;"><b>HUBUNGI KAMI</h3></p></b></center>
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 "><br>
		                    <div class="row">
		                        <div class="col-xs-2">
		                            <img src="asset\image\download.png" class="rounded float-left gbr-cot" alt="Gambar" style="width:50px; padding:4px">
		                        </div>
		                        <div class="col-xs-3">
                                    <p style="margin-left:7px;margin-right:2px;margin-top:12px;">Address&emsp;&emsp;:<br> </p>
		                        </div>
                                <div class="col-xs-7">
                                    <p style="margin-bottom:35px;margin-top:13px;">&emsp;Jl. Rungkut Asri Timur XV no. 12, Surabaya, Jawa Timur</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="asset\image\images (1).png" class="rounded float-left gbr-cot" alt="Gambar" style="width:50px; padding:4px">
                                </div>
                                <div class="col-xs-3">
                                    <p style="margin-left:7px;margin-right:2px;margin-top:12px;"> Email&emsp;&emsp;&emsp;:</p>
                                </div>
                                <div class="col-xs-5">
                                    <p style="margin-bottom:35px;margin-top:13px;margin-right:180px;">&emsp;UCarsurabaya@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="asset\image\telp.png" class="rounded float-left gbr-cot" alt="Gambar" style="width:50px; padding:4px">
                                </div>
                                <div class="col-xs-3">
                                    <p class="margin-left:7px;text-justify float-left" style="margin-right:5px;margin-top:15px;text-align:right;">  No.Telp&emsp;&emsp;:</p>
                                </div>
                                <div class="col-xs-5">
                                    <p style="margin-bottom:35px;margin-top:13px;margin-right:2px">&emsp;(031)5584390<br>&emsp;081346910223</p>
                                </div>
		                    </div>
                        </div>
                    </div>
                </div>
</body>
</html>
