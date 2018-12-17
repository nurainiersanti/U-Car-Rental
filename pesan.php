<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  session_start();
  if (!isset($_SESSION['username'])){
    header ("index.php");
  }else { 
   $username = $_SESSION['username']; 
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
  <?php 
          //proses menampilkan data dari database:
          //siapkan query SQL
          $query = "SELECT * FROM pelanggan WHERE username = '$username'";
          $result = $conn->query($query);
      ?>
      <?php while($data = mysqli_fetch_array($result)): ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFFFFF;">
        <a class="navbar-brand" href="index.php">
            <img src="asset/image/ucar.png" width="150" height="30" class="rounded float-left" alt=" ">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Home
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
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $data['nama'];  ?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="gantipass.php">Ganti Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out">Sign Out</i></a>
              </div>
            </div>
          </li>
        </ul>
                </nav>
                <?php endwhile ?>
    <div class="container">
    <div id="header">
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
        <form  action="pesan-aksi.php" method="POST" autocomplete="on" id="form1">
          <fieldset>
            <div class="form-group">
					            		<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label" for="from">Tanggal Pinjam</label>
						     
							                    <input class="form-control from" size="12" type="date" name="tgl_pinjam" required="required">
							                   
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
					            				<label class="control-label">Tanggal Kembali</label>
						              			
								                    <input class="form-control to" size="12" type="date" name="tgl_kembali" required="required">
								                   
						              		</div>
						            	</div>
						            </div>
          </fieldset>

          <div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<button type="submit" class="btn btn-primary" align="right"name="avail">Check</button>
					</div>
				</div>
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
