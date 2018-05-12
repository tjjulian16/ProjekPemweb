<?php
include "koneksiJulian.php";
session_start();
date_default_timezone_set('Asia/Jakarta');
//DATA PENERIMA
$id_penerima = rand(100000,999999);
$namaPenerima = $_POST['namaPenerima'];
$alamatPenerima = $_POST['alamatPenerima'];
$provinsiTujuan = $_POST['provinsiTujuan'];
$kotaTujuan = $_POST['kotaTujuan'];
$notelTujuan = $_POST['notelTujuan'];
$kodePosTujuan = $_POST['kodePosTujuan'];
$status_barang = 'pending';


//DATA PENGIRIM
$id_pengirim = rand(100000,999999);
$namaPengirim = $_POST['namaPengirim'];
$alamatPengirim = $_POST['alamatPengirim'];
$provinsiAsal = $_POST['provinsiAsal'];
$kotaAsal = $_POST['kotaAsal'];
$notelAsal = $_POST['notelAsal'];
$kodePosAsal = $_POST['kodePosAsal'];

//DATA BARANG
$no_resi = rand(100000,999999);
$nama_barang = $_POST['namaBarang'];
$layanan = $_POST['Paket'];
$berat = $_POST['berat'];
$tanggal = date('d/m/Y');
$getHarga = "SELECT biaya FROM harga WHERE kota_asal = '$kotaAsal'  AND kota_tujuan =  '$kotaTujuan' AND jenis_layanan = '$layanan'";
$hasil = mysqli_query($link,$getHarga);
$result = mysqli_fetch_array($hasil);
$ongkir = $result['biaya'] * $berat; 

//DATA FEEDBACK
$_SESSION['pengguna'] = $id_pengirim;

$insertDataBarang = "INSERT INTO barang  VALUES ('','$no_resi','$id_pengirim','$id_penerima','$nama_barang','$berat','$ongkir','$tanggal','$layanan','pending')";

$insertDataPengirim = "INSERT INTO pengirim VALUES ('$id_pengirim','$no_resi','$namaPengirim','$alamatPengirim','$kodePosAsal','$provinsiAsal','$kotaAsal','$notelAsal')";

$insertDataPenerima = "INSERT INTO penerima VALUES ('$id_penerima','$no_resi','$namaPenerima','$alamatPenerima','$kodePosTujuan', '$provinsiTujuan','$kotaTujuan','$notelTujuan')";


$pengirim = mysqli_query($link,$insertDataPengirim);
$penerima = mysqli_query($link,$insertDataPenerima);
$barang = mysqli_query($link,$insertDataBarang);


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
<body onload="startTime()">
	
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
    	 <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome, User
    	 	
    	 	<span class="caret"></span></a>
    	 	<ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="LandingPage.php"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<section id="Login_as">
    <div class="container-fluid">
      <div style="text-align: center;">
         <h2 style="font-weight: bold;">Terima kasih telah menggunakan Antar.in</h2>
        <h3>Pesanan anda akan segera kami proses :)</h3>
      </div>
    <br>
    
        <div class="resi row">
        	<div class="col-md-12" style="margin-bottom: 5%;">

        		<div class="col-md-5 col-sm-12" style="border: 1px solid #12a8bb; text-align: center; margin: 0 5%;">
        			<h2 style=" font-weight: bold; border-bottom: 1px solid grey; padding-bottom: 2%;">#Resi anda: <?php  echo "$no_resi"; ?></h2>
        			<div class="col-md-6 col-sm-12">
        				<label for="text">Nama Pengirim:</label>
                        <h5><?php echo "$namaPengirim" ?></h5> 
                        <label for="text">Alamat Pengirim:</label>
                        <h5><?php echo "$alamatPengirim ,<br>"."$kotaAsal ,"."$provinsiAsal"; ?> </h5>
                        <label for="text">Nama Barang: </label>
                        <h5><?php echo "$nama_barang"; ?></h5>
                        <label for="text">Berat Barang: </label>
                        <h5><?php  echo "$berat"; ?> KG</h5>  

        			</div>
        			<div class="col-md-6 col-sm-12">
        				<label for="text">Nama Penerima:</label>
                        <h5><?php echo "$namaPenerima"; ?></h5> 
        				<label for="text">Alamat Penerima:</label>
                        <h5><?php echo "$alamatPenerima ,<br>"."$kotaTujuan ,"."$provinsiTujuan"; ?></h5>
                        <label for="text">Jenis Layanan:</label>
                        <h5><?php echo "$layanan"; ?></h5>
                        <label for="text">Total Harga:</label>
                        <h5>RP <?php echo "$ongkir"; ?> </h5>  
        			</div>
        		</div>

        		<div class="col-md-5 col-sm-12" style="border: 1px solid #12a8bb; text-align: center; padding-bottom: 2%;">
        			<h2 style=" font-weight: bold; border-bottom: 1px solid grey; padding-bottom: 2%;">Berikan Ulasan </h2>
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
	</script>
</html>
