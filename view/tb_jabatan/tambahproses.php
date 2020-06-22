<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');
	
	$detik			= date('s');
	$hari			= date('d');
	$tahun			= date('y');		
	$sql			= "SELECT * FROM tb_jabatan";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $tahun . $result . $detik . $hari;

    $kd_tt 	= $data;
    $nm_tt 	= $_POST['nm_tt'];
    $nig	= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"INSERT INTO tb_jabatan VALUES('$kd_tt', '$nm_tt', '$nig')") or die(mysqli_error($koneksi));
	
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