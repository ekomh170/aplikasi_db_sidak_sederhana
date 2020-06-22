<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

    $kd_kelas = $_POST['kd_kelas'];
    $nm_kelas = $_POST['nm_kelas'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"UPDATE tb_kelas SET kd_kelas = '$kd_kelas', nm_kelas = '$nm_kelas', nig = '$nig' WHERE kd_kelas = '$kd_kelas'")or die (mysqli_error($koneksi));
	
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