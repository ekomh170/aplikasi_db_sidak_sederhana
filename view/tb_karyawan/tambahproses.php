<?php

if(isset($_POST['submit'])){
	
	include('../../config/koneksi.php');
	include '../class.php';

	$detik			= date('s');
	$bulan			= date('m');
	$tahun			= date('y');
	$sql			= "SELECT * FROM tb_karyawan";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			=  $result . $tahun . $detik . $detik . $bulan;

	$nika  			= $data;
    $nik 			= $_POST['nik'];
    $nm_karyawan	= $_POST['nm_karyawan'];
    $jk 			= $_POST['jk'];
    $tmpt_lahir 	= $_POST['tmpt_lahir'];
    $tgl_lahir 		= $_POST['tgl_lahir'];
    $agama 			= $_POST['agama'];
    $alamat_karyawan= $_POST['alamat_karyawan'];
    $no_telp 	 	= $_POST['no_telp'];

	
	$input = mysqli_query($koneksi,"INSERT INTO tb_karyawan VALUES('$nika', '$nik', '$nm_karyawan', '$jk', '$tmpt_lahir', '$tgl_lahir', '$agama','$alamat_karyawan', '$no_telp')") or die(mysqli_error($koneksi));
	
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