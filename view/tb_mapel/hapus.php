<?php  
session_start();
if(isset($_GET['id'])){
include '../../config/koneksi.php';
	$koneksi->query("DELETE FROM tb_mapel WHERE kd_mapel = ".$_GET['id']) or die(mysqli_error($koneksi));
}
echo "
		<script>
			alert('Data Berhasil DiHapus!');
			document.location.href = 'index.php';
		</script>
	";
?>
