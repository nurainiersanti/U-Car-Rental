<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['No_ktp'])) {
          //query SQL
          $nrp_upd = $_GET['No_ktp'];
          $query = "DELETE FROM data_order_pelanggan WHERE No_ktp = '$No_ktp_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: index.php?status='.$status);
      }  
  }