<?php 
include '../../config/koneksi.php';	
include '../header.php';
$query = "SELECT * FROM tb_siswa as s INNER JOIN tb_jurusan as j ON s.kd_jurusan = j.kd_jurusan INNER JOIN tb_kelas as k ON s.kd_kelas = k.kd_kelas  ";
$result = mysqli_query($koneksi, $query);
?>

<div class="container">
    <br>
	<h1 class="text-center">Data Siswa</h1>
	<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
        <a href="tambah.php" name="tambah" type="button" class="btn btn-block btn-dark bg-primary"><b>+ Data Baru</b></a>
    </div>
    <br><br>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>NIS</th>
            <th>NIK</th>
			<th>Nama Siswa</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat Siswa</th>
			<th>Nama Jurusan</th>
			<th>Agama</th>
			<th>Nama Ayah</th>
			<th>Nama Ibu</th>
			<th>Nama Kelas</th>
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
            <td><?= $data["nis"] ?></td>
            <td><?= $data["nik"] ?></td>
            <td><?= $data["nm_siswa"] ?></td>
            <td><?= $data["jk"] ?></td>
            <td><?= $data["tmpt_lahir"] ?></td>
            <td><?= $data["tgl_lahir"] ?></td>
            <td><?= $data["alamat_siswa"] ?></td>
            <td><?= $data["nm_jurusan"] ?></td>
            <td><?= $data["agama"] ?></td>
            <td><?= $data["nm_ayah"] ?></td>
            <td><?= $data["nm_ibu"] ?></td>
            <td><?= $data["nm_kelas"] ?></td>
            <td><?= $data["asisten"] ?></td>
            <td><?= $data["no_telp"] ?></td>
            <td>
            <a href="ubah.php?id=<?=$data["nis"]?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
            <br><br>
            <a href="hapus.php?id=<?=$data["nis"]?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
            </td>
        </tr>
        <?php $no++; ?>       
        <?php } ?> 
	</table>
</div>
<?php 	include '../footer.php'; ?>