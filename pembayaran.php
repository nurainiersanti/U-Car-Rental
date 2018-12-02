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
    <link rel="stylesheet" type="text/css" href="asset/css/stylepembayaran.css">
    <title>Pembayaran</title>
  </head>
  <body>
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
                Nama User
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="gantipass.php">Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php">Sign Out</a>
              </div>
            </div>
          </li>
        </ul>
    </nav>
    <div class="container">
    <div id="header">
      <h2>Pembayaran</h2>
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
        <form  action="konfirmasipembayaran.php" method="post" autocomplete="on" id="form1">
          <fieldset>
            <div class="form-grup">
              <div class="label">
              <label>Nama</label>
              </div>
              <div class="input">
                <input type="text" name="Nama" placeholder="Isikan nama anda" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Alamat</label>
              </div>
              <div class="input">
                <input type="text" name="alamat" placeholder="Isikan alamat anda" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Nomor KTP</label>
              </div>
              <div class="input">
                <input type="text" name="Nomor KTP" placeholder="Isikan Nomor KTP anda" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Nomor Telepon</label>
              </div>
              <div class="input">
                <input type="text" name="Nomor Telepon" placeholder="Isikan Nomor telepon anda" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Fasilitas</label>
              </div>
              <div class="input">
                <select  name="Fasilitas">
                  <option value="Supir">Supir</option>
                  <option value="Tanpa Supir">Tanpa Supir</option>
                  <option value="BBM">BBM</option>
                  <option value="Supir & BBM">Supir & BBM</option>
                </select>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Alamat jemput</label>
              </div>
              <div class="input">
                <textarea name="Alamat jemput" placeholder="isi Alamat jemput anda"></textarea>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Waktu jemput</label>
              </div>
              <div class="input">
                <input type="time" name="Waktu jemput" placeholder="Isikan waktu jemput anda" maxlength="30" autofocus>
              </div>
            </div>



          </fieldset>

          <div class="form-grup">
            <button href="konfirmasipembayaran.php" type="submit" name="button">Next</button>
          </div>

        </form>

      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
