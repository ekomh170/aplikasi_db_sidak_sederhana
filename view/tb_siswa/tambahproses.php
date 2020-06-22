<?php

if(isset($_POST['tambah'])){
	
	include('../../config/koneksi.php');

	$detik			= date('s');
	$hari			= date('d');	
	$tahun 			= date('y');  
	$sql			= "SELECT * FROM tb_siswa";
	$result 		= mysqli_num_rows(mysqli_query($koneksi, $sql));
	$data 			= $result . $tahun . $hari . $detik;

	$nis  			= $data;
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
	
	$input = mysqli_query($koneksi,"INSERT INTO tb_siswa VALUES('$nis','$nik','$nm_siswa','$jk','$tmpt_lahir','$tgl_lahir', '$alamat_siswa','$kd_jurusan', '$agama', '$nm_ayah', '$nm_ibu', '$kd_kelas', '$asisten', '$no_telp')")  or die(mysqli_error($koneksi));
	
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
				document.location.href = 'index.php';
			</script>	

		";		
	}
	}else{	
		
		echo '<script>window.history.back()</script>';
	}
?>