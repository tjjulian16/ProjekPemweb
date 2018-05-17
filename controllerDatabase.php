<?php
include "koneksiJulian.php";
session_start();
date_default_timezone_set('Asia/Jakarta');
//DATA PENERIMA
$id_penerima = rand(100000,999999);
$namaPenerima = $_POST['namaPenerima'];
$alamatPenerima = $_POST['alamatPenerima'];
$provinsiTujuan = $_POST['provinsiTujuan'];
$kotaTujuan = $_POST['kotaTujuan'];
$notelTujuan = $_POST['notelTujuan'];
$kodePosTujuan = $_POST['kodePosTujuan'];
$status_barang = 'pending';


//DATA PENGIRIM
$id_pengirim = rand(100000,999999);
$namaPengirim = $_POST['namaPengirim'];
$alamatPengirim = $_POST['alamatPengirim'];
$provinsiAsal = $_POST['provinsiAsal'];
$kotaAsal = $_POST['kotaAsal'];
$notelAsal = $_POST['notelAsal'];
$kodePosAsal = $_POST['kodePosAsal'];

//DATA BARANG
$no_resi = rand(100000,999999);
$nama_barang = $_POST['namaBarang'];
$layanan = $_POST['Paket'];
$berat = $_POST['berat'];
$tanggal = date('d/m/Y');
$getHarga = "SELECT biaya FROM harga WHERE kota_asal = '$kotaAsal'  AND kota_tujuan =  '$kotaTujuan' AND jenis_layanan = '$layanan'";
$hasil = mysqli_query($link,$getHarga);
$result = mysqli_fetch_array($hasil);
$ongkir = $result['biaya'] * $berat; 
$namaKurir = '';

//DATA RESI
$_SESSION['pengirim'] = $id_pengirim;
$_SESSION['penerima'] = $id_penerima;
$_SESSION['resi'] = $no_resi;


$insertDataBarang = "INSERT INTO barang  VALUES ('','$no_resi','$id_pengirim','$id_penerima','$nama_barang','$berat','$ongkir','$tanggal','$layanan','pending','$namaKurir')";

$insertDataPengirim = "INSERT INTO pengirim VALUES ('$id_pengirim','$no_resi','$namaPengirim','$alamatPengirim','$kodePosAsal','$provinsiAsal','$kotaAsal','$notelAsal')";

$insertDataPenerima = "INSERT INTO penerima VALUES ('$id_penerima','$no_resi','$namaPenerima','$alamatPenerima','$kodePosTujuan', '$kotaTujuan','$provinsiTujuan','$notelTujuan')";


mysqli_query($link,$insertDataPengirim);
mysqli_query($link,$insertDataPenerima);
mysqli_query($link,$insertDataBarang);


header('location:transaksi.php');
?>


