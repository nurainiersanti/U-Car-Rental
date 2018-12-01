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
        <a class="navbar-brand" href="home.php">
            <img src="asset/image/ucar.png" width="150" height="30" class="rounded float-left" alt=" ">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"> Home
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
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#daftar">
                            <b>Daftar</b></button>
                            <!-- Modal -->
                            <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title" id="title">DAFTAR</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label">Nama</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <label for="uname" class="col-form-label">Username</label>
                                                    <input type="text" class="form-control" id="uname" placeholder="Username">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" placeholder="example@mail.com">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tlp" class="col-form-label">No. Telepon</label>
                                                    <input type="text" class="form-control" id="tlp" placeholder="No. Telepon">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat" class="col-form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sandi" class="col-form-label">Password</label>
                                                    <input type="text" class="form-control" id="sandi" placeholder="Password">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                                        Password harus berisi 8-20 karakter menggunakan huruf maupun angka, tidak boleh ada spasi, special characters, atau emoji.
                                                    </small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="repassword" class="col-form-label">Confirm Password</label>
                                                    <input type="text" class="form-control" id="repassword" placeholder="Password">
                                                    <div class="invalid-tooltip">
                                                        Harus Diisi.
                                                    </div>
                                                </div>
                                                <label for="ktp" class="col-form-label">Foto/Scan KTP</label></form>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                                <label for="sim" class="col-form-label"><br>Foto/Scan SIM</label></br></label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <li class="nav-item">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#login">
                            <b>Login</b></button>
                            <!-- Modal -->
                            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title" id="ModalLongTitle">LOGIN</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button></div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="username" class="col-form-label">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-form-label">Password</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Password">
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                    <label class="form-check-label" for="autoSizingCheck2">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary" type="submit" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
