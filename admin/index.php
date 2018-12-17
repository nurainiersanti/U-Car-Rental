<?php
 //memanggil file conn.php yang berisi koneski ke database
 //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
 session_start();
 require_once("conn.php");
 if(!isset($_SESSION['username_admin'])) {
   header('location:login.php');
 } else {
   $username = $_SESSION['username_admin'];
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
<<<<<<< HEAD
                <a class="nav-link" href="<?php echo "datauser.php"; ?>">Data Pelanggan</a>
              </li>
              <li class="nav-item">
=======
>>>>>>> 6f394a08ecc34426081a543f0bcbb9a54be93888
                <a class="nav-link" href="<?php echo "logout.php"; ?>">Logout</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Pelanggan berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Pelanggan gagal di-update</div>';
              }

            }
           ?>
          <h2 style="margin: 30px 0 30px 0;">Order Pelanggan</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No.Booking</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No.KTP</th>
                  <th>Telp</th>
                  <th>Fasilitas</th>
                  <th>Alamat Jemput</th>
                  <th>Waktu Jemput</th>
                  <th>Pilihan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM penjemputan";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['no_booking'];  ?></td>
                    <td><?php echo $data['Nama_pelanggan'];  ?></td>
                    <td><?php echo $data['Alamat_pelanggan'];  ?></td>
                    <td><?php echo $data['Nik_Pelanggan'];  ?></td>
                    <td><?php echo $data['Telp_pelanggan'];  ?></td>
                    <td><?php echo $data['Fasilitas'];  ?></td>
                    <td><?php echo $data['Alamat_jemput'];  ?></td>
                    <td><?php echo $data['Waktu_jemput'];  ?></td>
                    
                    <td>
                      <a href="<?php echo "delete.php?no_booking=".$data['no_booking']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
