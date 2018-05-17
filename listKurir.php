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

<h1 style="text-align: center;">List Kurir Antar.In</h1><hr>

<h3 style="text-align: center;">Kurir yang Tersedia</h3>

<div class="bordertable" style="margin-left: 2%; margin-right: 2%; margin-top: 2%; ">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Kurir</th>
      <th scope="col">No. Resi</th>
      <th scope="col">Nama Kurir</th>
      <th scope="col">Status Kurir</th>
    </tr>
  </thead>

<?php

include "koneksiJulian.php";

  $available = 'available';
$sql = "SELECT * FROM Kurir WHERE statusKurir = '$available'";

$result = mysqli_query($link, $sql);

while($baris = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>". $baris['idKurir']. "</td>";
      echo "<td>". $baris['noResi']. "</td>";
      echo "<td>". $baris['namaKurir']. "</td>";
      echo "<td>". $baris['statusKurir']. "</td>";
      echo "</tr>";
}


?>
</table>
</div>

<h3 style="text-align: center;">Kurir yang Tidak Tersedia</h3>

<div class="bordertable" style="margin-left: 2%; margin-right: 2%; margin-top: 2%; ">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Kurir</th>
      <th scope="col">No. Resi</th>
      <th scope="col">Nama Kurir</th>
      <th scope="col">Status Kurir</th>
    </tr>
  </thead>

<?php

include "koneksiJulian.php";

  $busy = 'busy';
$sql = "SELECT * FROM Kurir WHERE statusKurir = '$busy'";

$result = mysqli_query($link, $sql);

while($baris = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>". $baris['idKurir']. "</td>";
      echo "<td>". $baris['noResi']. "</td>";
      echo "<td>". $baris['namaKurir']. "</td>";
      echo "<td>". $baris['statusKurir']. "</td>";
      echo "</tr>";
}


?>
</table>
</div>

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