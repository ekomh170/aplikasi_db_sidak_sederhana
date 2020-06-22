<?php 
include '../../config/koneksi.php';	
include '../header.php';
$query = "SELECT * FROM tb_kelas as k INNER JOIN tb_guru as g on k.nig = g.nig";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <br>
	<h1 class="text-center">Data Kelas</h1>
	<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
        <a href="tambah.php" name="tambah" type="button" class="btn btn-block btn-dark bg-primary"><b>+ Data Baru</b></a>
    </div>
    <br><br>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Kode Kelas</th>
			<th>Nama Kelas</th>
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
        <td><?= $data["kd_kelas"] ?></td>
        <td><?= $data["nm_kelas"] ?></td>
        <td><?= $data["nig"] ?></td>
        <td><?= $data['nm_guru'] ?></td>
        <td>
        <a href="ubah.php?id=<?=$data["kd_kelas"]?>"><button type="update" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
        <a href="hapus.php?id=<?=$data["kd_kelas"]?>"><button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
        </td>
        </tr>
        <?php $no++; ?>       
        <?php } ?> 
	</table>
</div>
<?php 	include '../footer.php'; ?>