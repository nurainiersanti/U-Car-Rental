<?php

  include ('conn.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['username'])) {
          //query SQL
          $username_upd = $_GET['username'];
          $query = "DELETE FROM pelanggan WHERE username = '$username_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: datauser.php?status='.$status);
      }
  }
