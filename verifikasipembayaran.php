<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <link rel="stylesheet" type="text/css" href="asset/css/styleverifikasipembayaran.css">





    <title> verifikasi Pembayaran </title>
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
      <div id="header">
        <h2>Verifikasi Pembayaran</h2>
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
      <div class="form-container">
        <form  action="action.php" method="post" autocomplete="on" id="form1">
          <fieldset>
            <h5>Batas Waktu Pembayaran</h5>
          </fieldset>
          <div class="form-grup">
          <h6>menit &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; detik</h6>
          <h1>40:00</h1>
          <h2 style="color: #252525 ;margin-top:20px;font-size:18px;font-weight:bold;text-align:center;">
            Jumlah yang perlu Anda transfer
          </h2>
          <div style="padding:4px;color: white;background:#151515;font-size:20px;font-weight:bold;text-align:center;width:85%; margin:30px auto;padding:10px;">
            Rp 430.000
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;margin-left:-30px;">
                <label for="bukti_pembayaran">Silahkan Upload Bukti Pembayaran</label><br>
                <input id="bukti_pembayaran" class="border border-grey " type="file" name="bukti_pembayaran" style="margin-left:40px;margin-top:40px;color:#252525;">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12" style="color: #252525;text-align:center;font-weight:bold;font-size:25px;margin-left:-40px;margin-bottom:30px;margin-top:100px;">
                Data Bank
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 " style="text-align:center;font-weight:bold;font-size:20px;margin-top:20px;margin-left:-50px;">
                <img src="asset/image/bank bca.png" style="height:35px;">
                <div style="color:#252525 ;font-size:14px;">01-5363-1111</div>
                <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col -md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:20px;margin-left:15px;">
                  <img src="asset/image/bank bni.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-2222</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:40px;margin-left:-50px;">
                  <img src="asset/image/bank bri.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-3333</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:40px;margin-left:15px;">
                  <img src="asset/image/bank mandiri.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-4444</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>


            </div>

          </div>
          <div class="form-grup">
            <button type="submit" name="button">Saya Sudah Melakukan Pembayaran</button>
          </div>
          </div>


      </div>


    </div>

  </body>
</html>
