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

 #Paragraf{
  border-bottom: 3px solid #caceab; 
  padding-bottom: 3%;
}

 #gambar{
 position:fixed;
 top:0px;
 left:0px;
 width:100%;
 height:100%;
 z-index:-1;
}

#cek{
  margin: 5% 5% 5% 10%; 
  height: 800px;
  max-width: 500px; 
  background-color: white; 
  padding-top: 3%;
}

#g1{
padding-left: 15px; 
color: #085272
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jqu
ery/1.11.3/jquery.min.js"></script>
<script>
  $(document).ready(function()
  {
    $("#demo").mouseover(function() {    
      $("#demo").css("background-color", "blue");
      $("#demo").text("KLIK UNTUK CEK STATUS!");
    });
    $("#demo").mouseout(function() {    
      $("#demo").css("background-color", "red");
      $("#demo").text("CEK STATUS SEKARANG?");
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


<div id="gambar" class="container-fluid">
  <img src="assets/penerimabarang.jpeg">
 </div>

<div id="cek">
<div style="color: black; text-align: justify; margin-left: 3%;">
  <h1>Cek Status</h1>
</div>
   <form action="" method="post" style="border-bottom: 3px solid #caceab">
      <div style="margin:1% 2% 5% 4%; color: #808080; ">
      <label for="noResi" ><h5 style="color: black">Masukkan No Resi Anda Disini</h5></label>
      <input type="noResi" class="form-control" id="noResi" placeholder="No Resi" style="max-width: 500px">
      <button type="submit" style="margin-top: 3%" id="demo" onmouseover="mouseover()" onmouseout="mouseout()">CEK STATUS SEKARANG?</button>
    </div>
   </form>
<div id="Paragraf">
  <h3 style="color: black"> Cek Status Antar.in</h3>
  <p style="color: black"> Kirim barang di Antar.in sekarang ngga perlu khawatir! Disini kamu bisa cek status pengiriman barang kamu sudah sampai mana. Jadi, kamu bisa pantau terus deh, proses pengirimannya :D</p>
  <h4 style="color: black"> Gimana? Percaya kan buat di Antar.in?</h4>
</div>
<div class="container-fluid" style="padding-bottom: 10%; padding-right: 10%">
<h3 style="color: black">CONTACT</h3>
            <div class="row" style="padding-bottom: 1px; padding-left: 15%">
                <div class="col-4">
                  <a href="#"><i class="fa fa-twitter fa-2x" id="g1"></i></a>
                </div>
                <div class="col-4">
                  <a href="#"><i class="fa fa-google-plus fa-2x" id="g1" "></i></a>
                </div>
                <div class="col-4">
                  <a href="#"><i class="fa fa-facebook fa-2x" id="g1" "></i></a>
                </div>
            </div>

</div>
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
