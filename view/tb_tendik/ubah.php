<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_tendik WHERE nit = '$id'";
$result = mysqli_query($koneksi, $query);
($d = mysqli_fetch_array($result));
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Tambah</h1>
            <form action="ubahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Tendik : </label>
                    <input type="text" readonly="" class="form-control" value="<?= $d['nit'];?>" name="nit">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" class="form-control" value="<?= $d['nik'];?>" name="nik" placeholder="Masukan Nomor Induk Kependudukan">
                </div>
                <div class="form-group">
                    <label>Nomer Unik Pendidik dan Tenaga Kependidikan</label>
                    <input type="text" class="form-control" value="<?= $d['nuptk'];?>" name="nuptk" placeholder="Masukan Nomor Unik Pendidik dan Tenaga Kependidikan">
                </div>
                <div class="form-group">
                    <label>Nama Tendik</label>
                    <input type="text" class="form-control" value="<?= $d['nm_tendik'];?>" name="nm_tendik" placeholder="Masukan Nama Tendik">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin : </label>
                    <select name="jk" class="form-control">
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                     <label>Tempat Lahir : </label>
                    <input type="text" placeholder="Masukan Tempat Lahir" value="<?= $d['tmpt_lahir'];?>" class="form-control" name="tmpt_lahir">
                </div>  
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                    <input type="date" placeholder="Masukan Tanggal Lahir" value="<?= $d['tgl_lahir'];?>" class="form-control" name="tgl_lahir">
                </div>
                 <div class="form-group">
                    <label>Agama : </label>
                    <input type="text" placeholder="Masukan Agama" value="<?= $d['agama'];?>" class="form-control" name="agama">
                </div>
                <div class="form-group">
                    <label>Alamat Tendik : </label>
                    <input type="text" placeholder="Masukan Alamat Tendik" value="<?= $d['alamat_tendik'];?>" class="form-control" name="alamat_tendik">
                </div>
                <div class="form-group">
                    <label>Status Tendik : </label>
                    <select name="status_tendik" class="form-control">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sertifikasi : </label>
                    <input type="text" placeholder="Masukan Sertifikasi" value="<?= $d['sertifikasi'];?>" class="form-control" name="sertifikasi">
                </div>
                 <div class="form-group">
                    <label>Golongan : </label>
                    <input type="text" placeholder="Masukan Golongan" value="<?= $d['golongan'];?>" class="form-control" name="golongan">
                </div>
                <div class="form-group">
                    <label>Asisten : </label>
                    <input type="text" placeholder="Masukan Nama Asisten" value="<?= $d['asisten'];?>" class="form-control" name="asisten">
                </div>
                <div class="form-group">
                    <label>Nomer Telpon : </label>
                    <input type="text" placeholder="Masukan Nomer Telpon" value="<?= $d['no_telp'];?>" class="form-control" name="no_telp">
                </div>
            <button type="ubah" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>