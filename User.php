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
    	 <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome User
    	 	
    	 	<span class="caret"></span></a>
    	 	<ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<section id="Layanan">
      <div id="Judul" style="text-align: center; margin-top: 5%;">
         <h2>Selamat datang!</h2>
         <h3>Silahkan Pilih Layanan Kami</h3>
      </div>

      <div class="fotoLayanan row">
        <img src="assets/harga.png">
        <img src="assets/kirim.png">
         <img src="assets/status.jpg">
      </div>
    <br>
    
        <div class="Layanan row">
             <a href="#" class="col-lg-2 col-xs-9" id="harga" style="border:2px solid #3ce819;">Cek harga</a>
             <a href="#" class="col-lg-2 col-xs-9" id="kirim"  style="border:2px solid #12a8bb">Kirim barang</a>
             <a href="#" class="col-lg-2 col-xs-9" id="status" style="border:2px solid #d3e818;">Cek status pengiriman</a>
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