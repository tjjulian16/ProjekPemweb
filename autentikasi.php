
<?php

include "koneksiJulian.php";
$inputUser = $_POST['Username'];
$passwordUser = $_POST['password'];
$query = "SELECT * FROM login WHERE username = '$inputUser' AND password = '$passwordUser'";
$cek = mysqli_query($link,$query);

if (mysqli_num_rows($cek) == 1){
		
		session_start();
		

		if($inputUser == 'admin'){
			$_SESSION['pengguna'] = 'admin';
			header('location: menuAdmin.php');
		}
		elseif ($inputUser == 'manager'){
			$_SESSION['pengguna'] = 'manager';
			header('location: manager.php');
		}
		else{
			$_SESSION['pengguna'] = $inputUser;
			header('location: User.php');
		}
		echo "sukses";
	}
else{
header('location: login.php');
}

?>