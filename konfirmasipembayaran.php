<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">

    <link rel="stylesheet" type="text/css" href="css/stylekonfirmasipembayaran.css">

    <title>Konfirmasi Pembayaran</title>
  </head>
  <body>
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
              <form  action="action.php" method="post" autocomplete="on" id="form1">
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
                  <button type="submit" name="button">Next</button>
                </div>

              </form>

            </div>

          </div>
        </div>
        <div class="col-4">
          <div class="container2">
            <div class="form-container2">
              <form  action="action.php" method="post" autocomplete="on" id="form1">
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
