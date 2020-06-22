<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

    $kd_mapel = $_POST['kd_mapel'];
    $nm_mapel = $_POST['nm_mapel'];
    $nig		= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"UPDATE tb_mapel SET kd_mapel = '$kd_mapel', nm_mapel = '$nm_mapel', nig = '$nig' WHERE kd_mapel = '$kd_mapel'")or die (mysqli_error($koneksi));
	
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