<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  session_start();
  require_once("conn.php");

$query = "SELECT max(no_booking) as maxKode FROM penjemputan";
$hasil = mysqli_query($conn,$query);
$data = mysqli_fetch_array($hasil);
$no_booking = $data['maxKode'];
$noUrut = (int) substr($no_booking, 3, 3);
$noUrut++;
$char = "BKG";
$no_booking = $char . sprintf("%03s", $noUrut);
?>

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
                <a class="dropdown-item" href="index.php">Sign Out</a>
              </div>
            </div>
          </li>
        </ul>
    </nav>
    <?php endwhile ?>
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
        <form  action="pembayaran-aksi.php" method="POST">
          <fieldset>
            <div class="form-grup">
              <div class="label">
                <label>No. Booking</label>
            </div>
              <input class="form-control" type="text" name="no_booking" value="<?php echo $no_booking;?>" readonly="readonly" maxlength="30" autofocus required="required">
          </div>
            <div class="form-grup">
              <div class="label">
              <label>Nama</label>
              </div>
                <input class="form-control" type="text" name="Nama_pelanggan" placeholder="Isikan nama anda" maxlength="30" autofocus required="required">
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Alamat</label>
              </div>
                <textarea class="form-control" type="text" name="Alamat_pelanggan" placeholder="Isikan alamat anda" maxlength="30" autofocus required="required"></textarea>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Nomor KTP</label>
              </div>
                <input class="form-control" type="text" name="Nik_pelanggan" placeholder="Isikan Nomor KTP anda" maxlength="30" autofocus required="required">
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Nomor Telepon</label>
              </div>
                <input class="form-control" type="text" name="Telp_pelanggan" placeholder="Isikan Nomor telepon anda" maxlength="30" autofocus required="required">
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Fasilitas</label>
              </div>
                <select class="custom-select" name="Fasilitas" required="required">
                  <option value="Supir">Supir</option>
                  <option value="Tanpa Supir">Tanpa Supir</option>
                  <option value="BBM">BBM</option>
                  <option value="Supir & BBM">Supir & BBM</option>
                </select>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Alamat jemput</label>
              </div>
                <textarea class="form-control" name="Alamat_jemput" placeholder="isi Alamat jemput anda" required="required"></textarea>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Waktu jemput</label>
              </div>
                <input class="form-control" type="time" name="Waktu_jemput" placeholder="Isikan waktu jemput anda" maxlength="30" autofocus required="required">
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
