<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

	$nika  			= $_POST['nika'];
    $nik 			= $_POST['nik'];
    $nm_karyawan	= $_POST['nm_karyawan'];
    $jk 			= $_POST['jk'];
    $tmpt_lahir 	= $_POST['tmpt_lahir'];
    $tgl_lahir 		= $_POST['tgl_lahir'];
    $agama 			= $_POST['agama'];
    $alamat_karyawan= $_POST['alamat_karyawan'];
    $no_telp 	 	= $_POST['no_telp'];

   	$input = mysqli_query($koneksi,"UPDATE tb_karyawan SET nika = '$nika', nik = $nik, nm_karyawan = '$nm_karyawan', jk = '$jk', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat_karyawan = '$alamat_karyawan', no_telp = '$no_telp' WHERE nika = '$nika'");


	if($input){
		
		echo "
			<script>
				alert('Data Berhasil DiUbah!');
				document.location.href = 'index.php';
			</script>
		";
		
	}else{
		
		echo "
			<script>
				alert('Data Gagal DiUbah!');
				document.location.href = 'index.php';
			</script>	

		";		
	}
	}else{	
		
		echo '<script>window.history.back()</script>';
	}
?>