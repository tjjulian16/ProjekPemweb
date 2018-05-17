<?php 
error_reporting(0);
include "koneksiRevantio.php";
$KotaPengiriman = $_POST['KotaPengiriman'];
$KotaTujuan = $_POST['KotaPenerima'];
$JenisPaket = $_POST['JenisPaket'];
$BeratBarang = $_POST['Berat'];
$sql = "SELECT biaya FROM harga WHERE kota_asal = '$KotaPengiriman'  AND kota_tujuan =  '$KotaTujuan' AND jenis_layanan = '$JenisPaket'";

$harga = mysqli_query($link,$sql);
$hasil = mysqli_fetch_array($harga);
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

<style>
  #demo{
  background-color:red;
  padding:10px;
  width:200px;
  color:white;
  text-align: center;
}

#content1{ 
  height:300px;
  width: 1100px; 
  background-color: white; 
  padding-top: 7%;
  margin-left: 3%;
  
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jqu
ery/1.11.3/jquery.min.js"></script>
<script>
  $(document).ready(function()
  {
    $("#demo").mouseover(function() {    
      $("#demo").css("background-color","red");
      $("#demo").text("KLIK UNTUK CEK HARGA!");
    });
    $("#demo").mouseout(function() {    
      $("#demo").css("background-color", "blue");
      $("#demo").text("CEK HARGA SEKARANG");
    });
  });
</script>
</div>
</head>
<body onload="startTime()">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-inverse navbar-fixed-top" >
  <img src="assets/logo.png" width="auto" height="35">
  <a class="navbar-brand" href="LoginAs.php" style="margin-left: 1%; color: white">Antar.in</a>
    <ul class="navbar-nav mr-auto">

    <!-- buat konten navbar nya
    -->
    </ul>
    <p id="date"></p>
    <p id="time"></p>
    <div class="dropdown" style="margin-left: 2%; margin-right: 4%;">
       <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome User
        
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>
<div id="content1">
  <img src="assets/paket.jpg" alt="paket" align="right" width="600px" height="450">
<div style="color: black; text-align: justify; margin-left: 3% ; margin-top: 1%">
  <h1>Cek Detail Harga</h1>

<!---Form -->
<form action="CekHarga.php" method="post">
<div style="float: left; ; color: black; text-align: justify; margin-left: 3%;">
  <h5>Kota Pengiriman</h5>
   <div class="input-group"><select class="form-control" name="KotaPengiriman" style="height: calc(2.25rem + 10px) " required="required" >
  <option selected="selected" value= "">KOTA</option>
  <option value="Malang">Malang</option>
  <option value="Surabaya">Surabaya</option>
  <option value="Jakarta">Jakarta</option>
</select>
</div>
<h5>Kota Penerima</h5>
  <div class="input-group"><select class="form-control" name="KotaPenerima" style="height: calc(2.25rem + 10px)" required="required" >
  <option selected="selected" value= "">KOTA</option>
  <option value="Malang">Malang</option>
  <option value="Surabaya">Surabaya</option>
  <option value="Jakarta">Jakarta</option>
</select>
</div>
<div style = "color: black; text-align: justify; margin-left: 0%;">
  <h5>Jenis Paket Pengiriman</h5>
<div class="input-group"><select class="form-control" name="JenisPaket" style="height: calc(2.25rem + 10px )" required="required" >
  <option selected="selected" disabled value selected style=" display: none;">Jenis Paket</option>
  <option value="Regular">Reguler</option>
  <option value="Cepat">Cepat</option>
</select>
</div>
<div style = "color: black; text-align: justify; margin-left: 0%;">
  <h5>Berat Barang</h5>
  <input type="number" name="Berat" min="0" max="100" value="0">
  <label>Kg</label>
            </div>
 </div>        
  <button type="submit" value="submit" name = "submit" style="margin-top: 3%" id="demo" onmouseover="mouseover()" onmouseout="mouseout()">CEK HARGA SEKARANG</button>
 </div>    
</form>
<div id="txtHint" style = "color: black; text-align: justify; margin-left: 25% "><b>Biaya Pengiriman Di Antar.in</b></div>
<div style = "color: black; text-align: justify; margin-left: 25%">
 <h5>Dari : <?php echo $_POST['KotaPengiriman'], '-', $_POST['KotaPenerima'];?>
 <h5>Dengan Berat : <?php echo $BeratBarang,' Kg';?>
 <h5>Jenis Layanan : <?php echo $_POST['JenisPaket'] ?>
  <h5>Total Harga Pengiriman</h5>
  <label>Rp</label>
  <?php  echo $hasil['biaya'] * $BeratBarang ; ?>
  </div>

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