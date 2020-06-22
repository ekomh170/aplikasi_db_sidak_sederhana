<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_guru WHERE nig = '$id'";
$d = mysqli_query($koneksi, $query);
($d = mysqli_fetch_array($d));
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Tambah Data</h1><br><br>
            <form  action="ubahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Guru : </label>
                    <input type="text" readonly="" class="form-control" value="<?= $d['nig'];?>" name="nig">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" class="form-control" value="<?= $d['nik'];?>" name="nik" placeholder="Masukan Nomor Induk Kependudukan ">
                </div>
                <div class="form-group">
                    <label>Nomer Unik Pendidik dan Tenaga Kependidikan : </label>
                    <input type="text" class="form-control" value="<?= $d['nuptk'];?>" name="nuptk"  placeholder="Masukan Nomer Unik Pendidik dan Tenaga Kependidikan">
                </div>
                <div class="form-group">
                    <label>Nama Guru : </label>
                    <input type="text" placeholder="Nama Guru" value="<?= $d['nm_guru'];?>" class="form-control" name="nm_guru">
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
                    <input type="text" placeholder="Tempat Lahir" class="form-control" value="<?= $d['tmpt_lahir'];?>" name="tmpt_lahir">
                </div>  
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                    <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tgl_lahir" value="<?= $d['tgl_lahir'];?>">
                </div>
                <div class="form-group">
                    <label>Agama : </label>
                    <input type="text" placeholder="Agama" class="form-control" name="agama" value="<?= $d['agama'];?>">
                </div>
                <div class="form-group">
                    <label>Alamat Guru : </label>
                    <input type="text" placeholder="Alamat Guru" class="form-control" name="alamat_guru" value="<?= $d['alamat_guru'];?>">
                </div>
                <div class="form-group">
                    <label>Status Guru : </label>
                    <select name="status_guru" class="form-control" required>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Vertifikasi : </label>
                    <input type="text" placeholder="Masukan Vertifikasi" class="form-control" name="vertifikasi" value="<?= $d['vertifikasi'];?>">
                </div>
                 <div class="form-group">
                    <label>Golongan : </label>
                    <input type="text" placeholder="Masukan Golongan" class="form-control" name="golongan" value="<?= $d['golongan'];?>">
                </div>
                 <div class="form-group">
                    <label>Nomer Telpon : </label>
                    <input type="text" placeholder="Masukan No Telpon" class="form-control" name="no_telp" value="<?= $d['no_telp'];?>">
                </div>
                <button type="ubah" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
                <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>