<?php
	
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(preg_match("/^[a-z_]+$/", $username) == 0){
		echo "<script>alert('Username, harus terdiri dari huruf kecil dan underscore. Dengan panjang 8 karakter.');location.href='nomor_2.php';</script>";

	}else if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[_])(?=.*[A-Z]).*$/", $password) == 0){
		echo "<script>alert('Password, harus terdiri dari huruf kecil, huruf besar, angka dan karakter spesial. Dengan panjang 8 karakter');location.href='nomor_2_proses.php';</script>";

?>