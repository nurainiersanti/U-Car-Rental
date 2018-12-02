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
    <title>USER PROFILE</title>
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
      <p>Home >> Profile </p>
      <h2>User Profile</h2>
    </div>
      <div class="form-container">
        <form  action="profile.php" method="post" autocomplete="on" id="form1">
          <fieldset>
            <div class="form-grup">
              <div class="label">
              <label>Nama</label>
              </div>
              <div class="input">
                <input type="text" name="nama" placeholder="Isikan Nama lengkap Anda" value="Dwi Darma Ardiansyah" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Username</label>
              </div>
              <div class="input">
                <input type="text" name="username" placeholder="Isikan Username Anda" value="ardiganteng09" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Email</label>
              </div>
              <div class="input">
                <input type="text" name="email" placeholder="Isikan Email Anda" value="dwidarmaganteng@gmail.com" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>No Telepon</label>
              </div>
              <div class="input">
                <input type="text" name="telepon" placeholder="Isikan No Telepon Anda" value="081239906939" maxlength="30" autofocus>
              </div>
            </div>
            <div class="form-grup">
              <div class="label">
              <label>Alamat</label>
              </div>
              <div class="input">
                <input type="text" name="alamat" placeholder="isi Alamat Lengkap Anda" value="Jln Rungkut Asri Timur XV No 12 Rungkut Surabaya" maxlength="100" autofocus >
              </div>
            </div>
          </fieldset>

          <div class="form-grup">
            <button href="profile.php" type="submit" name="button" >Save</button>
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
