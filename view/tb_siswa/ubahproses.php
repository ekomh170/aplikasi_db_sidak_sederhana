<?php

if(isset($_POST['ubah'])){
	
	include('../../config/koneksi.php');

	$nis  			= $_POST['nis'];
    $nik 			= $_POST['nik'];
    $nm_siswa		= $_POST['nm_siswa'];
    $jk 			= $_POST['jk'];
    $tmpt_lahir 	= $_POST['tmpt_lahir'];
    $tgl_lahir 		= $_POST['tgl_lahir'];
    $alamat_siswa   = $_POST['alamat_siswa'];
    $kd_jurusan     = $_POST['kd_jurusan'];
    $agama 	 		= $_POST['agama'];
    $nm_ayah 	 	= $_POST['nm_ayah'];
    $nm_ibu 	 	= $_POST['nm_ibu'];
    $kd_kelas 		= $_POST['kd_kelas'];
    $asisten 		= $_POST['asisten'];
    $no_telp 		= $_POST['no_telp'];

	
	$ubah = mysqli_query($koneksi,"UPDATE tb_siswa SET nis = '$nis', nik = '$nik', nm_siswa = '$nm_siswa', jk = '$jk', tmpt_lahir = '$tmpt_lahir', tgl_lahir = '$tgl_lahir', alamat_siswa = '$alamat_siswa', kd_jurusan = '$kd_jurusan', agama = '$agama', nm_ayah = '$nm_ayah', nm_ibu = '$nm_ibu', kd_kelas = '$kd_kelas', asisten = '$asisten', no_telp = '$no_telp' WHERE nis = '$nis'") or die(mysqli_error($koneksi));
	
	if($ubah){
		
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