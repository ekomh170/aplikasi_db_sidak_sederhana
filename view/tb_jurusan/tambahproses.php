<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');
	
	$detik			= date('s');
	$bulan			= date('m');	
	$tahun			= date('y');
	$sql			= "SELECT * FROM tb_jurusan";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $tahun . $result . $hari . $bulan;

    $kd_jurusan = $data;
    $nm_jurusan = $_POST['nm_jurusan'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"INSERT INTO tb_jurusan VALUES('$kd_jurusan', '$nm_jurusan', '$nig')") or die(mysqli_error($koneksi));
	
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