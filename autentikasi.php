
<?php

include "koneksiJulian.php";
$inputUser = $_POST['Username'];
$passwordUser = $_POST['password'];
$query = "SELECT * FROM login WHERE username = '$inputUser' AND password = '$passwordUser'";
$cek = mysqli_query($link,$query);

if (mysqli_num_rows($cek) == 1){
		session_start();
		$_SESSION['status'] = 'sukses';
		$_SESSION['nama'] = $inputUser;
		
		$_SESSION['pass']= $passwordUser;

		if($inputUser == 'admin'){
			header('location: User.php');
		}
		else{
			header('location: manajer.php');
		}
}
else{
$_SESSION['status'] = 'gagal';
header('location: login.php');

}



?>