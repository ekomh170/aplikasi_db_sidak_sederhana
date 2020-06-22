<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_karyawan WHERE nika = '$id'";
$result = mysqli_query($koneksi, $query);
($d = mysqli_fetch_array($result));
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Ubah</h1>
            <form action="ubahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Karyawan : </label>
                    <input type="text" readonly="" class="form-control" value="<?= $d['nika'];?>" name="nika">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" class="form-control" value="<?= $d['nik'];?>" name="nik">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan : </label>
                    <input type="text" class="form-control" value="<?= $d['nm_karyawan'];?>" name="nm_karyawan">
                </div>
                 <div class="form-group">
                    <label>Jenis Kelamin : </label>
                    <select name="jk" class="form-control" required>
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir : </label>
                    <input type="text" class="form-control" value="<?= $d['tmpt_lahir'];?>" name="tmpt_lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                     <input type="date" class="form-control" value="<?= $d['tgl_lahir'];?>" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Agama : </label>
                     <input type="text" class="form-control" value="<?= $d['agama'];?>" name="agama">
                </div>
                <div class="form-group">
                    <label>Alamat Karyawan : </label>
                     <input type="text" class="form-control" value="<?= $d['alamat_karyawan'];?>" name="alamat_karyawan">
                </div>
                 <div class="form-group">
                    <label>Nomer Telpon : </label>
                     <input type="text" class="form-control" value="<?= $d['no_telp'];?>" name="no_telp">
                </div>
            <button type="ubah" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>