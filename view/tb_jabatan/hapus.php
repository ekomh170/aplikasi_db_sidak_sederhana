<?php  
session_start();
if(isset($_GET["id"])){
include '../../config/koneksi.php';
	mysqli_query($koneksi, "DELETE FROM tb_jabatan WHERE kd_tt = ".$_GET["id"]);
}
echo "
		<script>
			alert('Data Berhasil DiHapus!');
			document.location.href = 'index.php';
		</script>
	";
exit()
?>
