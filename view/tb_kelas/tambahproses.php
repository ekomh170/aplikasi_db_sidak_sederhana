<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');
	
	$detik		= date('s');	
	$tahun		= date('yy'); 
	$sql		= "SELECT * FROM tb_kelas";
	$result 	= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 		= $tahun . $detik . $result . $result;

    $kd_kelas 	= $data;
    $nm_kelas 	= $_POST['nm_kelas'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"INSERT INTO tb_kelas VALUES('$kd_kelas', '$nm_kelas', '$nig')")  or die(mysqli_error($koneksi));
	
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