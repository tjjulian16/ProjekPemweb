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
  <a class="navbar-brand" href="LoginAs.php" style="margin-left: 1%;">Antar.in</a>
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
  <div class="container-fluid">
      <div id="Judul">
         <h2>Selamat datang!</h2>
         <h3>Silahkan Pilih Layanan Kami</h3>
      </div>

<div class="row">
  <div class="col-lg-4 col-sm-12">
    <div class="card">
      <img src="assets/harga.png" >
      <div class="card-body" >
        <a href="#" class="btn btn-lg btn-primary">Cek harga</a>
        <br><br>
        <p class="card-text">Klik disini untuk melihat ongkos kirim dari Antar.in</p>
        
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-12">
    <div class="card">
      <img src="assets/kirim.png">
      <div class="card-body" >
        <a href="#" class="btn btn-lg btn-primary" >Kirim barang</a>
        <br><br>
        <p class="card-text">Klik disini untuk mengirim barang melalui Antar.in</p>
        
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-sm-12">
    <div class="card">
      <img src="assets/status.jpg" style="width: 43%; margin-left: 27%;">
      <div class="card-body" >
        <a href="#" class="btn btn-lg btn-primary">Cek status</a>
        <br><br>
        <p class="card-text">Klik disini untuk melihat status pengiriman anda</p>
        
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