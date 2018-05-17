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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



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

<h1 style="text-align: center;"> Kelola Pesanan Pengiriman Barang </h1>

<div class="bordertable" style="margin-left: 2%; margin-right: 2%; margin-top: 2%; ">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No. Resi</th>
      <th scope="col">Id Pengirim</th>
      <th scope="col">Id Penerima</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Berat Barang</th>
      <th scope="col">Ongkir</th>
      <th scope="col">Tanggal Pengiriman</th>
      <th scope="col">Jenis Layanan</th>
      <th scope="col">Nama Kurir</th>
      <th scope="col">Status Barang</th>
      <th scope="col">Batalkan Pesanan</th>
      <th scope="col">Update Pesanan</th>
    </tr>
  </thead>

</div>

<?php

include "koneksiJulian.php";
$sql = "SELECT * FROM barang where status_barang != 'Delivered'";
$result = mysqli_query($link, $sql);

while($baris = mysqli_fetch_array($result)){
  $id = $baris['no_resi'];
  echo "<tr>";
  echo "<td>" . $baris['no_resi'] . "</td>";
  echo "<td>" . $baris['id_pengirim'] . "</td>";
  echo "<td>" . $baris['id_penerima'] . "</td>";
  echo "<td>" . $baris['nama_barang'] . "</td>";
  echo "<td>" . $baris['berat_barang'] . "</td>";
  echo "<td>" . $baris['ongkir'] . "</td>";
  echo "<td>" . $baris['tanggal_pengiriman'] . "</td>";
  echo "<td>" . $baris['jenis_layanan'] . "</td>";
  echo "<td>" . $baris['nama_kurir'] . "</td>";
  echo '<form action="updateAdmin.php" method="get"><td>
        <select name="status_barang">
        <option value="Pending">'.$baris['status_barang'].'</option>
        <option value="Manifested">manifested</option>
        <option value="On Process">on process</option>
        <option value="Receivered on destination">received on destination</option>
        <option value="Delivered">delivered</option></select></form>';
  echo '<td><a href="deleteData.php?no_resi=$baris[no_resi]">Delete</a></td>';
  echo '<td> <input type="submit" name="submitin" value="SAVE !" id="submitin" class="btn btn-light"></td>';

}

?>
</table>

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
<script type="text/javascript">
  $(submitin).click(function submitin(){
    swal({ 
      icon: "success",
      title: "Berhasil",
      text: "Data berhasil di update",
      button: "Aww yiss!",
});
})
</script>

</form>

</html>