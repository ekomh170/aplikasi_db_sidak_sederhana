<?php 
include '../../config/koneksi.php';	
include '../header.php';
$query = "SELECT * FROM tb_jurusan as j INNER JOIN tb_guru as g ON j.nig = g.nig";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <br>
	<h1 class="text-center">Data Jurusan</h1>
	<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
        <a href="tambah.php" name="tambah" type="button" class="btn btn-block btn-dark bg-primary"><b>+ Data Baru</b></a>
    </div>
    <br><br>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Kode jurusan</th>
			<th>Nama jurusan</th>
			<th>NIG</th>
            <th>Nama Guru</th>
            <th>Aksi</th>
		</tr>	
		<?php                
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {  
        ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $data["kd_jurusan"] ?></td>
        <td><?= $data["nm_jurusan"] ?></td>
        <td><?= $data["nig"] ?></td>
        <td><?= $data["nm_guru"] ?></td>
        <td>
        <a href="ubah.php?id=<?=$data["kd_jurusan"]?>"><button type="update" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
        <a href="hapus.php?id=<?=$data["kd_jurusan"]?>"><button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
        </td>
        </tr>
        <?php $no++; ?>       
        <?php } ?> 
	</table>
</div>
<?php 	include '../footer.php'; ?>