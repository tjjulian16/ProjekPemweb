<?php
include "koneksiJulian.php";

$sql = "INSERT INTO login (username,password) VALUES ('julian','rahasia') ";

$res = mysqli_query($link,$sql);

if ($res) {
	echo "sukses";
}
else{
	echo "gagal";
}
?>