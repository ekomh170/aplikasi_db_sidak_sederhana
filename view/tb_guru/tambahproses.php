<?php

if(isset($_POST['tambah'])){
	

	include('../../config/koneksi.php');
	
	$detik			= date('s');
	$hari			= date('d');
	$bulan			= date('m');	
	$tahun 			= date('y');  
	$sql			= "SELECT * FROM tb_guru";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $result . $tahun . $hari . $detik . $bulan;

	$nig  			= $data;
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


	$input = mysqli_query($koneksi,"INSERT INTO tb_guru VALUES('$nig', '$nik', '$nuptk', '$nm_guru', '$jk', '$tmpt_lahir', '$tgl_lahir', '$agama', '$alamat_guru', '$status_guru', '$vertifikasi', '$golongan', '$no_telp')")  or die(mysqli_error($koneksi));
	
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