<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/bootstrap-min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-grid.css">

    <link rel="stylesheet" type="text/css" href="asset/css/stylekonfirmasipembayaran.css">

    <title>Konfirmasi Pembayaran</title>
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
                                        <h5 class="modal-title" id="title">DAFTAR</h5>
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
                                        <h5 class="modal-title" id="ModalLongTitle">LOGIN</h5>
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
      <div class="row">
        <div class="col-12">
          <div class="container1">
            <div id="header">
            <p>Home >> Order >> Pesan Mobil >> Pilih Mobil >> Pembayaran >> Konfirmasi Pembayaran.</p>
            <h2>Konfirmasi Pemesanan</h2>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="satuduatiga btn-light non-active" style="cursor:not-allowed">
                  1
                </label>
                <label class="satuduatiga btn-light non-active" style="cursor:not-allowed">
                  2
                </label>
                <label class="satuduatiga btn-light active">
                  3
                </label>
              </div>
          </div>
        </div>
      </div>

        <div class="col-8">
          <div class="container1">
            <div class="form-container1">
              <form  action="verifikasipembayaran.php" method="post" autocomplete="on" id="form1">
                <fieldset>
                  <div class=" confirm form-grup">
                    <label class="label">Jenis Pembayaran </label>
                    <div class="input">
                      <input type="radio" name="jenispembayaran" value="1" > BCA <br>
                      <input type="radio" name="jenispembayaran" value="2" > BNI <br>
                      <input type="radio" name="jenispembayaran" value="3" > BRI <br>
                      <input type="radio" name="jenispembayaran" value="4" > Mandiri <br>


                    </div>
                  </div>
                  <div class="form-grup">
                    <hr>
                    <input type="checkbox" name="agree" value="1" form="form1">Data yang saya isi sudah benar/sesuai dengan yang saya inginkan.
                    <br>
                    <input type="checkbox" name="agree" value="2" form="form1">Saya setuju dengan peraturan yang sudah di tentukan oleh Ucar.
                  </div>


                </fieldset>

                <div class="form-grup">
                  <button href="verifikasipembayaran.php" type="submit" name="button">Next</button>
                </div>

              </form>

            </div>

          </div>
        </div>
        <div class="col-4">
          <div class="container2">
            <div class="form-container2">
              <form  action="verifikasipembayaran.php" method="post" autocomplete="on" id="form1">
                  <div class=" confirm form-grup">
                    <fieldset>
                      <label class="label">Kode Booking </label>
                      <h6>12345678 </h6>
                    </fieldset>
                    <h4>Nama Penyewa </h4>
                    <h6>Dwi Darma Ardiansyah </h6>
                    <h4>Durasi </h4>
                    <h6>7 Hari</h6>
                    <h4>Tanggal Pinjam <h4>
                    <h6>Desember 32, 2018</h6>
                    <h4>Fasilitas <h4>
                    <h6>Supir & BBM</h6>
                    <h4>Mobil yang dipilih <h4>
                    <h6>Limosin hitam 2015</h6>
                  </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
