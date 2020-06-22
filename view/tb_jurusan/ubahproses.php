<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

    $kd_jurusan = $_POST['kd_jurusan'];
    $nm_jurusan = $_POST['nm_jurusan'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"UPDATE tb_jurusan SET kd_jurusan = '$kd_jurusan', nm_jurusan = '$nm_jurusan', nig = '$nig' WHERE kd_jurusan = '$kd_jurusan'")or die (mysqli_error($koneksi));
	
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