<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

    $kd_tt 	= $_POST['kd_tt'];
    $nm_tt 	= $_POST['nm_tt'];
    $nig	= $_POST['nig'];
 	
	$input = mysqli_query($koneksi,"UPDATE tb_jabatan SET kd_tt = '$kd_tt', nm_tt = '$nm_tt', nig = '$nig' WHERE kd_tt = '$kd_tt'")or die (mysqli_error($koneksi));
	
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