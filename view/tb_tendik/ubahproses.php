<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

	$nit  			= $_POST['nit'];
    $nik 			= $_POST['nik'];
    $nuptk			= $_POST['nuptk'];
    $nm_tendik		= $_POST['nm_tendik'];
    $jk 			= $_POST['jk'];
    $tmpt_lahir 	= $_POST['tmpt_lahir'];
    $tgl_lahir 		= $_POST['tgl_lahir'];
    $agama 			= $_POST['agama'];
    $alamat_tendik  = $_POST['alamat_tendik'];
    $status_tendik  = $_POST['status_tendik'];
    $sertifikasi 	= $_POST['sertifikasi'];
    $golongan 	 	= $_POST['golongan'];
    $asisten 		= $_POST['asisten'];
    $no_telp 		= $_POST['no_telp'];

	
	$input = mysqli_query($koneksi,"UPDATE tb_tendik SET nit = '$nit', nik = '$nik', nuptk = '$nuptk', nm_tendik = '$nm_tendik', jk = '$jk', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat_tendik = '$alamat_tendik', status_tendik = '$status_tendik', sertifikasi = '$sertifikasi', golongan = '$golongan', asisten = '$asisten', no_telp = '$no_telp' WHERE nit = $nit") or die(mysqli_error($koneksi));
	
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