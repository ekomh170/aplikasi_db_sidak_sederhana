<?php  
session_start();
if(isset($_GET["id"])){
include '../../config/koneksi.php';
	$koneksi->query("DELETE FROM tb_siswa WHERE nis = ".$_GET["id"]);
}
echo "
		<script>
			alert('Data Berhasil DiHapus!');
			document.location.href = 'index.php';
		</script>
	";
?>
