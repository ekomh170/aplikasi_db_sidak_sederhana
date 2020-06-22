<?php 
include '../../config/koneksi.php';	
include '../header.php';
$query = "SELECT * FROM tb_tendik";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <br>
	<h1 class="text-center">Data Tendik</h1>
	<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
        <a href="tambah.php" name="tambah" type="button" class="btn btn-block btn-dark bg-primary"><b>+ Data Baru</b></a>
    </div>
    <br><br>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nit</th>
			<th>Nuptk</th>
            <th>Nama Tendik</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
            <th>Agama</th>
			<th>Alamat Tendik</th>
			<th>Status Tendik</th>
			<th>Sertifikasi</th>
			<th>Golongan</th>
			<th>Asisten</th>
			<th>Nomer Telpon</th>
			<th>Aksi</th>
		</tr>	
		<?php                
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {  
        ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $data["nit"] ?></td>
        <td><?= $data["nuptk"] ?></td>
        <td><?= $data["nm_tendik"] ?></td>
        <td><?= $data["jk"] ?></td>
        <td><?= $data["tmpt_lahir"] ?></td>
        <td><?= $data["tgl_lahir"] ?></td>
        <td><?= $data["agama"] ?></td>
        <td><?= $data["alamat_tendik"] ?></td>
        <td><?= $data["status_tendik"] ?></td>
        <td><?= $data["sertifikasi"] ?></td>
        <td><?= $data["golongan"] ?></td>
        <td><?= $data["asisten"] ?></td>
        <td><?= $data["no_telp"] ?></td>
        <td>
        <a href="ubah.php?id=<?=$data["nit"]?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
        <br><br>
        <a href="hapus.php?id=<?=$data["nit"]?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
        </td>
        </tr>
        <?php $no++; ?>       
        <?php } ?> 
	</table>
</div>
<?php 	include '../footer.php'; ?>