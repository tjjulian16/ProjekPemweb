<?php
function cekLogin(){


session_start();
if(!isset($_SESSION['pengguna'])){
  $_SESSION['pengguna'] = null;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Antar.in</title>
     <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body onload="startTime(); " <?php  cekLogin(); ?>>
	
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
    	 <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome
       <?php echo "$_SESSION[pengguna]"; ?>
    	 	<span class="caret"></span></a>
    	 	<ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#" onclick="logout();" ><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<section id="Login_as">
    <div class="container-fluid">
      <div id="Judul">
         <h2>Selamat datang di Antar.In</h2>
         <h3>Sistem Informasi Pengiriman Barang Kekinian~</h3>
      </div>
    <br>
    
        <div class="Login row">
             
             <a href="login.php" class="col-lg-4 col-xs-4" id="admin"  style="border:2px solid #12a8bb;">Masuk ke Sistem</a>
             
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
function logout(){
  window.location.href="logout.php";
  alert(" Anda sudah logout \n Terima Kasih!");
}




	</script>

</html>

