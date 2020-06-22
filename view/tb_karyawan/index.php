<?php 
include '../../config/koneksi.php';	
include '../header.php';
$query = "SELECT * FROM tb_karyawan";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <br>
	<h1 class="text-center">Data Karyawan</h1>
	<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
        <a href="tambah.php" name="tambah" type="button" class="btn btn-block btn-dark bg-primary"><b>+ Data Baru</b></a>
    </div>
    <br><br>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>NIKA</th>
            <th>NIK</th>
			<th>Nama Karyawan</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
            <th>Alamat Karyawan</th>
			<th>Nomer Telpon</th>
			<th>Aksi</th>
		</tr>	
		<?php                
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {  
            // var_dump($data);
            // die();
        ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $data["nika"] ?></td>
        <td><?= $data["nik"] ?></td>
        <td><?= $data["nm_karyawan"] ?></td>
        <td><?= $data["jk"] ?></td>
        <td><?= $data["tmpt_lahir"] ?></td>
        <td><?= $data["tgl_lahir"] ?></td>
        <td><?= $data["agama"] ?></td>
        <td><?= $data["alamat_karyawan"] ?></td>
        <td><?= $data["no_telp"] ?></td>
        <td>
            <a href="ubah.php?id=<?=$data["nika"]?>"><button type="update" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
            <br><br>
            <a href="hapus.php?id=<?=$data["nika"]?>"><button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
        </td>
        </tr>
        <?php $no++; ?>       
        <?php } ?> 
	</table>
</div>
<?php 	include '../footer.php'; ?>