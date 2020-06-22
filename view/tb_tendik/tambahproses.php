<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');
	include '../class.php';

	$detik			= date('s');
	$bulan			= date('m');
	$hari			= date('d');	
	$tahun 			= date('y');  
	$sql			= "SELECT * FROM tb_tendik";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $result  . $bulan . $detik . $tahun . $hari;

	$nit  			= $data;
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

	
	$input = mysqli_query($koneksi,"INSERT INTO tb_tendik VALUES('$nit', '$nik', '$nuptk', '$nm_tendik', '$jk', '$tmpt_lahir', '$tgl_lahir', '$agama', '$alamat_tendik', '$status_tendik', '$sertifikasi', '$golongan', '$asisten', '$no_telp')")  or die(mysqli_error($koneksi));
	
	if($input){
		
		echo "
			<script>
				alert('Data Berhasil Di Tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
		
	}else{
		
		echo "
			<script>
				alert('Data Gagal Ditambahkan!');
				document.location.href = 'tambah.php';
			</script>	

		";		
	}
	}else{	
		
		echo '<script>window.history.back()</script>';
	}
?>