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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<style>
  #demo{
  background-color:red;
  padding:10px;
  width:200px;
  color:white;
  text-align: center;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jqu
ery/1.11.3/jquery.min.js"></script>
<script>
  $(document).ready(function()
  {
    $("#demo").mouseover(function() {    
      $("#demo").css("background-color", "blue");
      $("#demo").text("OK");
    });
    $("#demo").mouseout(function() {    
      $("#demo").css("background-color", "red");
      $("#demo").text("OKnaiiknan");
    });
  });
</script>

</head>

<body onload="startTime()">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-inverse navbar-fixed-top" >
  <img src="assets/logo.png" width="auto" height="35">
  <a class="navbar-brand" href="LoginAs.php" style="margin-left: 1%; color: white">Antar.in</a>
    <ul class="navbar-nav mr-auto">
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


<center>
<img src="assets/penerimabarang.jpeg" style="margin-left: 10%; margin-right: 10%; height: 80%; width: 70% ">
</center>

<table border='0' width='70%' cellpadding='2'  cellspacing='2' align='center' bgcolor=white><tr></tr>
    <br><tr>
        <td colspan="2" bgcolor=Gainsboro>
        <center>
        <b>DATA BARANG</b>
        </center>
        </td>
    </tr>
        <tr><td><b>Barang Anda<b/></td><td><br><input type="text" name="barang anda" size="100" maxlength="50"/></td></tr>
        <tr><td><b>Deskripsi Barang<b/></td><td><br><input type="text" name="Deskripsi barang" size="100" maxlength="50"/></td></tr>
        <tr><td><b>Status Barang<b/></td><td><br><input type="text" name="Status barang" size="100" maxlength="50"/></td></tr>
        <tr><td><b>Berat Barang (kg)<b/></td><td><br><input type="text" name="Berat barang" size="10" maxlength="50"/></td></tr>
        <br><tr>
        <td colspan="2" bgcolor=Gainsboro>
        <center>
        <b>DATA PENGIRIM</b>
        </center>
        </td>
    </tr>
        <tr><td><b>Dari</b></td><td><br><input type="text" name="Dari" size="100" maxlength="50"/></td></tr>
        <tr><td><b>Alamat</b></td><td><br><input type="text" name="Alamat" size="100" maxlength="50"/></td></tr>
        <tr><td><b>No Telp</b></td><td><br><input type="text" name="notelp" size="100" max="50"/></td>
        <tr><td><b>Kota</b></td><td><br><input type="text" name="Kota" size="100" max="50"/></td>
        <tr><td><b>Kode Pos</b></td><td><br><input type="text" name="Kode Pos" size="10" max="50"/></td>
    
    <br><tr>
        <td colspan="2" bgcolor=Gainsboro>
        <center>
        <b>DATA PENERIMA</b>
        </center>
        </td>
    </tr>
        <tr><td><b>Untuk</b></td><td><br><input type="text" name="Untuk" size="100" maxlength="50"></td></tr>
        <tr><td><b>Alamat</b></td><td><br><input type="text" name="Alamat" size="100" maxlength="50"></td></tr>
        <tr><td><b>NoTelp</b></td><td><br><input type="text" name="NoTelp" size="100" maxlength="50"></td></tr>
        <tr><td><b>Kota</b></td><td><br><input type="text" name="Kota" size="100" maxlength="50"></td></tr>
        <tr><td><b>Kode Pos</b></td><td><br><input type="text" name="Kode Pos" size="10" maxlength="50"></td></tr>

    <tr>
      <td colspan="2" align="center">
      <button type="submit" value="Proses" style="margin-left: 5%; margin-top: 5%" id="demo" onmouseover="mouseover()" onmouseout="mouseout()">OK</button>
      <br>
    </table>

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