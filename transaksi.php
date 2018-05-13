<?php
include "koneksiJulian.php";
session_start();
function cekLogin(){


if(!isset($_SESSION['pengguna'])){
  $_SESSION['pengguna'] = null;
}
}


$idPengirim = $_SESSION['pengirim'];
$idPenerima = $_SESSION['penerima'];
$resi = $_SESSION['resi'];

$sqlPengirim = "SELECT * FROM pengirim WHERE idPengirim = '$idPengirim'";

$sqlPenerima = "SELECT * FROM penerima WHERE id_penerima = '$idPenerima'";

$sqlBarang = "SELECT * FROM barang WHERE no_resi = '$resi'";

$hasilPengirim = mysqli_query($link,$sqlPengirim);
$hasilPenerima = mysqli_query($link,$sqlPenerima);
$hasilBarang = mysqli_query($link,$sqlBarang);

$returnPengirim = mysqli_fetch_array($hasilPengirim);
$returnPenerima = mysqli_fetch_array($hasilPenerima);
$returnBarang = mysqli_fetch_array($hasilBarang);

  ?>

  <!DOCTYPE html>
<html>
<head>
  <title>Antar.in</title>
     <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body onload="startTime(); <?php cekLogin(); ?>">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <img src="assets/logo.png" width="auto" height="35">
  <a class="navbar-brand" href="LandingPage.php" style="margin-left: 1%;">Antar.in</a>
    <ul class="navbar-nav mr-auto">

    <!-- buat konten navbar nya
    -->
    </ul>
    <p id="date"></p>
    <p id="time"></p>
    <div class="dropdown" style="margin-left: 2%; margin-right: 4%;">
       <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome, <?php echo "$_SESSION[pengguna]"; ?>
        
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#" onclick="logout();"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<section id="Resi">
    <div class="container-fluid">
      <div style="text-align: center;">
         <h2 style="font-weight: bold;">Terima kasih telah menggunakan Antar.in</h2>
        <h3>Pesanan anda akan segera kami proses :)</h3>
      </div>
    <br>
    
        <div class="resi row">
          <div class="col-md-12" style="margin-bottom: 5%;">

            <div class="col-md-5 col-sm-12" id="boxResi">
              <h2 id="headerResi">#Resi anda: <?php  echo "$returnBarang[no_resi]"; ?></h2>
              <div class="col-md-6 col-sm-12">
                <label for="text">Nama Pengirim:</label>
                        <h5><?php echo "$returnPengirim[namaPengirim]" ?></h5> 
                        <label for="text">Alamat Pengirim:</label>
                        <h5><?php echo "$returnPengirim[alamatPengirim] ,<br>"."$returnPengirim[kotaAsal] ,"."$returnPengirim[provinsiAsal]"; ?> </h5>
                        <label for="text">Nama Barang: </label>
                        <h5><?php echo "$returnBarang[nama_barang]"; ?></h5>
                        <label for="text">Berat Barang: </label>
                        <h5><?php  echo "$returnBarang[berat_barang]"; ?> KG</h5>  

              </div>
              <div class="col-md-6 col-sm-12">
                <label for="text">Nama Penerima:</label>
                        <h5><?php echo "$returnPenerima[namaPenerima]"; ?></h5> 
                <label for="text">Alamat Penerima:</label>
                        <h5><?php echo "$returnPenerima[alamatPenerima] ,<br>"."$returnPenerima[kotaTujuan] ,"."$returnPenerima[provinsiTujuan]"; ?></h5>
                        <label for="text">Jenis Layanan:</label>
                        <h5><?php echo "$returnBarang[jenis_layanan]"; ?></h5>
                        <label for="text">Total Harga:</label>
                        <h5>RP <?php echo "$returnBarang[ongkir]"; ?> </h5>  
              </div>
            </div>

            <div class="col-md-5 col-sm-12" id="boxFeedback">
              <h2 id="headerResi">Berikan Ulasan </h2>
              <div class="col-md-12 col-sm-12">
                <h3>Rating 1-10</h3>
              <form action="submitFeedback.php" method="POST">
               <input type="number" name="rating" class="form-control" style="font-size: 45px; height: 90px; text-align: center;" min="0" max="10" value="0">
               <button type="button" class="btn btn-lg btn-primary" style="margin-top: 5%;" data-toggle="modal" data-target="#notif">Kirim</button>
               <div class="modal fade" id="notif" role="dialog">
                                            <div class="modal-dialog modal-md">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  
                                                  <h2 class="modal-title">Terima kasih atas ulasan anda!</h2>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                  
                                                  <button type="submit" class="btn btn-primary" style="width: 50%; margin-right: 25%;">OK</button></a>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                   </form>
  
                              </div>
              
                        </div>

                 </div>
             </div>
             
        </div>
     </div>
</section>
</body>



 <script type="text/javascript">

        
        n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
      
      function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('time').innerHTML =
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
      }

      function checkTime(i) {
          if (i < 10) {i = "0" + i}; 
          return i;
      }
//FUNGSI LOGOUT 
     function logout(){
  window.location.href="logout.php";
  alert(" Anda sudah logout \n Terima Kasih!");
}

</script>
</html>