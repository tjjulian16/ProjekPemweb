<?php

include "koneksiJulian.php";

$id = $_GET['no_resi'];

$result = mysqli_query($link, "DELETE FROM barang WHERE no_resi='$id'");
if ($result) {
	header('location: kelolaAdmin.php');
}


?>