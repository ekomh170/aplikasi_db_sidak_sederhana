<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');
	
	$detik			= date('s'); 
	$hari			= date('d'); 
	$tahun			= date('y'); 
	$sql			= "SELECT * FROM tb_mapel";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $tahun . $result . $detik . $hari;

    $kd_mapel 	= $data;
    $nm_mapel 	= $_POST['nm_mapel'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"INSERT INTO tb_mapel VALUES('$kd_mapel', '$nm_mapel', '$nig')")  or die(mysqli_error($koneksi));
	
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