<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <link rel="stylesheet" type="text/css" href="css/styleverifikasipembayaran.css">





    <title> verifikasi Pembayaran </title>
  </head>
  <body>
    <div class="container">
      <div id="header">
        <p>Home >> Order >> Pesan Mobil >> Pilih Mobil >> Pembayaran >> Konfirmasi Pembayaran <br> >> Verifikasi Pembayaran.</p>
        <h2>Verifikasi Pembayaran</h2>
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
        <form  action="action.php" method="post" autocomplete="on" id="form1">
          <fieldset>
            <h5>Batas Waktu Pembayaran</h5>
          </fieldset>
          <div class="form-grup">
          <h6>menit &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; detik</h6>
          <h1>40:00</h1>
          <h2 style="color: #252525 ;margin-top:20px;font-size:18px;font-weight:bold;text-align:center;">
            Jumlah yang perlu Anda transfer
          </h2>
          <div style="padding:4px;color: white;background:#151515;font-size:20px;font-weight:bold;text-align:center;width:85%; margin:30px auto;padding:10px;">
            Rp 430.000
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;margin-left:-30px;">
                <label for="bukti_pembayaran">Silahkan Upload Bukti Pembayaran</label><br>
                <input id="bukti_pembayaran" class="border border-grey " type="file" name="bukti_pembayaran" style="margin-left:40px;margin-top:40px;color:#252525;">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12" style="color: #252525;text-align:center;font-weight:bold;font-size:25px;margin-left:-40px;margin-bottom:30px;margin-top:100px;">
                Data Bank
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 " style="text-align:center;font-weight:bold;font-size:20px;margin-top:20px;margin-left:-50px;">
                <img src="poto/bank bca.png" style="height:35px;">
                <div style="color:#252525 ;font-size:14px;">01-5363-1111</div>
                <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col -md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:20px;margin-left:15px;">
                  <img src="poto/bank bni.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-2222</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:40px;margin-left:-50px;">
                  <img src="poto/bank bri.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-3333</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center;font-weight:bold;font-size:20px;margin-top:40px;margin-left:15px;">
                  <img src="poto/bank mandiri.png" style="height:35px;">
                  <div style="color:#252525 ;font-size:14px;">01-5363-4444</div>
                  <div style="color:#252525 ;font-size:14px;">PT. U-Car Rental Indonesia</div>
              </div>


            </div>

          </div>
          <div class="form-grup">
            <button type="submit" name="button">Saya Sudah Melakukan Pembayaran</button>
          </div>
          </div>


      </div>


    </div>

  </body>
</html>
