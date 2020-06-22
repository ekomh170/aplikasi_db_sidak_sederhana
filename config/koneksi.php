<?php 	

$koneksi = mysqli_connect("localhost","root","","db_sidak");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

		
?>