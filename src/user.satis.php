<?php
include "koneksiJulian.php";
include "src/line.php";
include "src/pie.php";
include "src/bar.php";
session_start();
function cekLogin(){


if(!isset($_SESSION['pengguna'])){
  $_SESSION['pengguna'] = null;
}
}

  ?>

  <!DOCTYPE html>
<html>
<head>
  <title>Antar.in - Manager</title>
     <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body onload="startTime(); <?php cekLogin(); ?>">
  
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
       <a data-toggle="dropdown" href="#" style="margin-top: 25px; color: white;">Welcome, <?php echo "$_SESSION[pengguna]"; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="min-width: 0px;">
            <li><a href="#" onclick="logout();"><span class="fa fa-sign-out "></span> Keluar</a></li>
          </ul>
    </div>
 </nav>
<section id="Resi">
    <div class="container-fluid" style="border:1px solid #12a8bb; padding-bottom: 5%;" >
      <div style="text-align: center; ">
         <h2 style="font-weight: bold;">Halo Manager!</h2>
        <h3>Berikut Informasi terkini</h3>
      </div>
    <br>
        <div class="resi row">
          <div class="col-md-12" style="margin-bottom: 5%;">
 <div class="col-md-6 col-sm-12" id="boxFeedback" style="border:1px solid grey; padding-bottom: 80px; margin-left: 1%;">
              <h2 id="headerResi">User Satisfication </h2>
                <h1 style="margin-top: 6%;"><?php
                $koneksi     = mysqli_connect("localhost", "root", "", "anterin");
                  $avg          = mysqli_query($koneksi, "SELECT AVG(feedback) as rerata from feedback");
                  $d = mysqli_fetch_array($avg);
                  printf("%1\$.1f",$d[0]);
                  ?></h1>
                  <h2> From 10.0 </h2>
                  <button onclick="window.location.href='src/line.php'">Lihat Rekomendasi</button>    
                </div>