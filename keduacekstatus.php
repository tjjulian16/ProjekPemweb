<?php

include "KonekFirda.php";

if (isset($_POST['submit'])) {
  $noResi = $_POST['noResi'];

$sql = "SELECT * FROM barang WHERE no_resi = '$noResi'";

$result = mysqli_query($link , $sql);
if (mysqli_num_rows($result) == 1){
  ?>
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
<form action ="updateAdmin.php" method="get">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <img src="assets/logo.png" width="auto" height="35">
  <a class="navbar-brand" href="#" style="margin-left: 1%;">Antar.in</a>
    <ul class="navbar-nav mr-auto">

    <!-- buat konten navbar nya
    -->
    </ul>
    <p id="date"></p>
    <p id="time"></p>
    <div class="dropdown" style="margin-left: 2%; margin-right: 4%;">
       <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome Admin,
        
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<h1 style="text-align: center;">Status Pengiriman Anda</h1>
<div class="bordertable" style="margin-left: 2%; margin-right: 2%; margin-top: 2%; ">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No. Resi</th>
      <!-- <th scope="col">Id Pengirim</th>
      <th scope="col">Id Penerima</th> -->

      <!-- <th scope="col">Nama Penerima</th>
      <th scope="col">Alamat Penerima</th> -->
      <th scope="col">Nama Barang</th>
      <th scope="col">Berat Barang</th>
      <th scope="col">Ongkir</th>
      <th scope="col">Tanggal Pengiriman</th>
      <th scope="col">Jenis Layanan</th>
      <th scope="col">Status Barang</th>

</html>
<?php
  while($baris = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>" . $baris['no_resi'] . "</td>";
  echo "<td>" . $baris['nama_barang'] . "</td>";
  echo "<td>" . $baris['berat_barang'] . "</td>";
  echo "<td>" . $baris['ongkir'] . "</td>";
  echo "<td>" . $baris['tanggal_pengiriman'] . "</td>";
  echo "<td>" . $baris['jenis_layanan'] . "</td>";
  echo "<td>" . $baris['status_barang'] . "</td>";
  echo "</tr>";
  }
}
else {
  ?>

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
  <a class="navbar-brand" href="#" style="margin-left: 1%;">Antar.in</a>
    <ul class="navbar-nav mr-auto">

    <!-- buat konten navbar nya
    -->
    </ul>
    <p id="date"></p>
    <p id="time"></p>
    <div class="dropdown" style="margin-left: 2%; margin-right: 4%;">
       <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome ,
        
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>
  <h2 style="text-align: center;">Data tidak ditemukan!</h2>
  <?php
}
}






  

?>
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

<!-- <form action="post"><a href="updateAdmin.php" style = "margin-left : 95%;" type="save" class="btn btn-primary" value="save">SAVE !</a></form>
 </form> -->
