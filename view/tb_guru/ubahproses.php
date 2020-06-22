<?php

if(isset($_POST['ubah'])){
	include('../../config/koneksi.php');

	$nig  			= $_POST['nig'];
    $nik 			= $_POST['nik'];
    $nuptk	 		= $_POST['nuptk'];
    $nm_guru 		= $_POST['nm_guru'];
    $jk 			= $_POST['jk'];
    $tmpt_lahir 	= $_POST['tmpt_lahir'];
    $tgl_lahir 		= $_POST['tgl_lahir'];
    $agama 			= $_POST['agama'];
    $alamat_guru 	= $_POST['alamat_guru'];
    $status_guru 	= $_POST['status_guru'];
    $vertifikasi 	= $_POST['vertifikasi'];
    $golongan 		= $_POST['golongan'];
    $no_telp 	 	= $_POST['no_telp'];


	$ubah = mysqli_query($koneksi,"UPDATE tb_guru SET nik = '$nik', nuptk = '$nuptk', nm_guru = '$nm_guru', jk='$jk', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat_guru = '$alamat_guru', status_guru = '$status_guru', vertifikasi = '$vertifikasi', golongan = '$golongan', no_telp = '$no_telp' WHERE nig = $nig") or die (mysqli_error($koneksi));

	
	if($ubah){
		
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