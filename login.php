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
<body onload="startTime();">

	
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
    	 <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome,
    	 	
    	 	<span class="caret"></span></a>
    	 	<ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="LandingPage.php"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>

<section id="Login_as">
    <div class="container-fluid"">
      <div  style="text-align: center;">
         <h2>LOGIN</h2>
         <h3>Silahkan Login di kolom yang tersedia</h3>
      </div>
    <br>
    
     <div class="col-md-3 col-sm-5 col-xs-5" style="margin: 2% 38%;">
  <div class ="card">
    <div class="card-body">
        <form action="autentikasi.php" method="POST">
  <div class="form-group"> 
    <label >Username: </label>
    <input type="text" class="form-control" placeholder="Masukkan Username" name="Username" required>
    <br>
    <label >Password:</label>
    <input type="Password" class="form-control" placeholder="Masukkan Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" style="width: 45%; margin-left: 25%; border-radius: 15px;" >Login</button>
</form>
        
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
function alertGagal(){
	alert("Username atau password salah");
}


	</script>
</html>

