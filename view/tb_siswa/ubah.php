<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_siswa WHERE nis = '$id'";
$result = mysqli_query($koneksi, $query);
($d = mysqli_fetch_array($result));
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Tambah</h1>
            <form action="ubahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Siswa : </label>
                    <input type="text" readonly="" class="form-control" value="<?= $d['nis'];?>" name="nis">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" placeholder="Masukan Nomer Induk Kependudukan" class="form-control" value="<?= $d['nik'];?>" name="nik">
                </div>
                <div class="form-group">
                    <label>Nama Siswa : </label>
                    <input type="text" placeholder="Nama Siswa" class="form-control" value="<?= $d['nm_siswa'];?>" name="nm_siswa">
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
                    <input type="text" placeholder="Masukan Tempat Lahir" class="form-control" value="<?= $d['tmpt_lahir'];?>" name="tmpt_lahir">
                </div>  
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                    <input type="date" placeholder="Masukan Tanggal Lahir" class="form-control" value="<?= $d['tgl_lahir'];?>" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Alamat Siswa : </label>
                    <input type="text" placeholder="Masukan Alamat Siswa" class="form-control" value="<?= $d['alamat_siswa'];?>" name="alamat_siswa">
                </div>
                <div class="form-group">
                    <label>Nama Jurusan : </label>
                    <select name="kd_jurusan" class="form-control">
                     <?php
                        $jurusan = mysqli_query($koneksi, "SELECT * FROM `tb_jurusan`");
                        while ($j = mysqli_fetch_assoc($jurusan)) {
                     ?>
                        <option value="<?= $j['kd_jurusan'] ?>"><?= $j['nm_jurusan'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Agama : </label>
                    <input type="text" placeholder="Masukan Agama" class="form-control" value="<?= $d['agama'];?>" name="agama">
                </div>
                <div class="form-group">
                    <label>Nama Ayah : </label>
                    <input type="text" placeholder="Masukan Nama Ayah" class="form-control" value="<?= $d['nm_ayah'];?>" name="nm_ayah">
                </div>
                <div class="form-group">
                    <label>Nama Ibu : </label>
                    <input type="text" placeholder="Masukan Nama Ibu" class="form-control" value="<?= $d['nm_ibu'];?>" name="nm_ibu">
                </div>
                <div class="form-group">
                    <label>Nama Kelas : </label>
                    <select name="kd_kelas" class="form-control">
                     <?php
                        $kelas = mysqli_query($koneksi, "SELECT * FROM `tb_kelas`");
                        while ($k = mysqli_fetch_assoc($kelas)) {
                     ?>
                        <option value="<?= $k['kd_kelas'] ?>"><?= $k['nm_kelas'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Asisten : </label>
                    <input type="text" placeholder="Masukan Asisten" class="form-control" value="<?= $d['asisten'];?>" name="asisten">
                </div>
                <div class="form-group">
                    <label>Nomer Telpon : </label>
                    <input type="text" placeholder="Masukan Nomer Telpon" class="form-control" value="<?= $d['no_telp'];?>" name="no_telp">
                </div>
            <button type="ubah" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>