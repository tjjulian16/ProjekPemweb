<?php
include "koneksiJulian.php";
session_start();

$id = $_SESSION['pengirim'];
$feedback = $_POST['rating'];
$insertFeedback = "INSERT INTO feedback VALUES('$id','$feedback')";

$result = mysqli_query($link,$insertFeedback);

if($result){
header('location:LandingPage.php');
}
?>