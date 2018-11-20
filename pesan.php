<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php');


  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nrp = $_POST['nrp'];
      $nama = $_POST['nama'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $alamat = $_POST['alamat'];

      //query with PDO
      $query = $conn->prepare("INSERT INTO mhs (nrp, nama, jenis_kelamin, alamat) VALUES(:nrp, :nama, :jenis_kelamin, :alamat)");

      //binding data
      $query->bindParam(':nrp',$nrp);
      $query->bindParam(':nama',$nama);
      $query->bindParam(':jenis_kelamin',$jenis_kelamin);
      $query->bindParam(':alamat',$alamat);

      //eksekusi query
      if ($query->execute()) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
          <?php
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
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
    <link rel="stylesheet" href="asset/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="asset/css/stylepesan.css">
    <title>Pesan Mobil</title>
  </head>
  <body>
    <div class="container">
    <div id="header">
      <p>Home >> Order >> Pesan Mobil.</p>
      <h2>Pesan Mobil</h2>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="satuduatiga btn-light active">
            1
          </label>
          <label class="satuduatiga btn-light non-active" style="cursor:not-allowed">
            2
          </label>
          <label class="satuduatiga btn-light non-active"  style="cursor:not-allowed">
            3
          </label>
        </div>
    </div>
      <div class="form-container">
        <form  action="pilihmobil.php" method="post" autocomplete="on" id="form1">
          <fieldset>
            <div class="form-grup">
              <div class="label">
              <label>Jenis Mobil</label>
              </div>
              <div class="input">
                <select  name="Jenis Mobil">
                  <option value="Luxury cars">Luxury car</option>
                  <option value="Sedan cars">Sedan cars</option>
                  <option value="Mpv cars">Mvp cars</option>
                  <option value="Suv & Jeep cars">Suv & Jeep cars</option>
                  <option value="Wedding cars">Wedding cars</option>
                  <option value="Transporter & Bus">Transporter & Bus</option>
                </select>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Durasi</label>
              </div>
              <div class="input">
                <select  name="Durasi">
                  <option value="1 Hari">1 Hari</option>
                  <option value="2 Hari">2 Hari</option>
                  <option value="3 Hari">3 Hari</option>
                  <option value="4 Hari">4 Hari</option>
                  <option value="5 Hari">5 Hari</option>
                  <option value="6 Hari">6 Hari</option>
                  <option value="7 Hari">7 Hari</option>
                </select>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Tujuan</label>
              </div>
              <div class="input">
                <input type="text" name="tujuan" placeholder="Isikan tujuan anda" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Tanggal pinjam</label>
              </div>
              <div class="input">
                <input type="date" name="Tanggal pinjam">
              </div>
            </div>


          </fieldset>

          <div class="form-grup">
            <button href="pilihmobil.php" type="submit" name="button" >Next</button>
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
