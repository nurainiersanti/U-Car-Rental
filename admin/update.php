<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['No_Ktp'])) {
          //query SQL
          $No_Ktp_upd = $_GET['No_Ktp'];
          $query = "SELECT * FROM data_order_pelanggan WHERE No_Ktp = '$No_Ktp_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $No_Ktp = $_POST['No_Ktp'];
    $Nama_Pelanggan = $_POST['Nama_Pelanggan'];
    $Alamat_Pelanggan = $_POST['Alamat_Pelanggan'];
    $No_Telp_Pelanggan = $_POST['No_Telp_Pelanggan'];
    $Tanggal_pinjam = $_POST['Tanggal_pinjam'];
    $Tujuan = $_POST['Tujuan'];
    $Durasi_Pinjam = $_POST['Durasi_Pinjam'];
    $Jenis_Mobil = $_POST['Jenis_Mobil'];
    $Alamat_Penjemputan = $_POST['Alamat_Penjemputan'];
    $Waktu_Jemput = $_POST['Waktu_Jemput'];
    $Jenis_Peqmbayaran = $_POST['Jenis_Pembayaran'];
    $Jumlah_Pembayaran = $_POST['Jumlah_Pembayaran'];
    $Fasilitas = $_POST['Fasilitas'];
      //query SQL
      $sql = "UPDATE data_order_pelanggan SET Nama_Pelanggan='$Nama_Pelanggan', Alamat_Pelanggan='$Alamat_Pelanggan',
      No_Telp_Pelanggan='$No_Telp_Pelanggan', Tanggal_pinjam='$Tanggal_pinjam', Tujuan='$Tujuan', Durasi_Pinjam='$Durasi_Pinjam',
      Jenis_Mobil='$Jenis_Mobil', Alamat_Penjemputan='$Alamat_Penjemputan', Waktu_Jemput='$Waktu_Jemput', Fasilitas='$Fasilitas',
      Jenis_Pembayaran='$Jenis_Pembayaran', Jumlah_Pembayaran='$Jumlah_Pembayaran' WHERE No_Ktp='$No_Ktp'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Order Pelanggan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "form.php"; ?>">Input Data Order Pelanggan</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <h2 style="margin: 30px 0 30px 0;">Update Data Order Pelanggan</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>

            <div class="form-group">
              <label>No Ktp</label>
              <input type="text" class="form-control" placeholder="No KTP Pelanggan" name="No_Ktp" required="required">
            </div>

            <div class="form-group">
              <label>Nama Pelanggan</label>
              <input type="text" class="form-control" placeholder="Nama Pelanggan" name="Nama_Pelanggan" required="required">
            </div>

            <div class="form-group">
              <label>Alamat Pelanggan</label>
              <textarea class="form-control" name="Alamat_Pelanggan" required="required"></textarea>
            </div>

            <div class="form-group">
              <label>No Telp</label>
              <input type="text" class="form-control" placeholder="No Telp" name="No_Telp_Pelanggan" required="required">
            </div>

            <div class="form-grup">
              <div class="label">
              <label>Tanggal pinjam</label>
              </div>
                <input type="date" name="Tanggal_Pinjam" required="required">
            </div>

            <div class="form-group">
              <label>Tujuan</label>
              <input type="text" class="form-control" placeholder="Tujuan" name="Tujuan" required="required">
            </div>

            <div class="form-grup">
              <div class="label">
              <label>Durasi Pinjam</label></div>
                <select class="custom-select" name="Durasi_Pinjam" required="required">
                  <option value="1 Hari">1 Hari</option>
                  <option value="2 Hari">2 Hari</option>
                  <option value="3 Hari">3 Hari</option>
                  <option value="4 Hari">4 Hari</option>
                  <option value="5 Hari">5 Hari</option>
                  <option value="6 Hari">6 Hari</option>
                  <option value="7 Hari">7 Hari</option>
                </select>
              </div>

              <div class="form-group">
              <label>Jenis Mobil</label>
              <input type="text" class="form-control" placeholder="Jenis Mobil" name="Jenis_Mobil" required="required">
            </div>

            <div class="form-group">
              <label>Alamat Penjemputan</label>
              <textarea class="form-control" name="Alamat_Penjemputan" required="required"></textarea>
            </div>

            <div class="form-grup">
              <div class="label">
              <label>Waktu jemput</label>
              </div>
                <input class="form-control" type="time" name="Waktu_Jemput" placeholder="Isikan waktu jemput anda" maxlength="30" autofocus required="required">
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

            <div class="form-group">
              <label>Jenis Pembayaran</label>
              <select class="custom-select" name="Jenis_Pembayaran" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="L">BCA</option>
                <option value="P">BNI</option>
                <option value="P">BRI</option>
                <option value="P">Mandiri</option>
                <option value="P">Bank Lainnya</option>
              </select>
            </div>

            <div class="form-group">
              <label>Jumlah Pembayaran</label>
              <textarea class="form-control" name="Jumlah_Pembayaran" required="required"></textarea>
            </div>

            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
