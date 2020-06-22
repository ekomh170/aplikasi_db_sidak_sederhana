<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$query = "SELECT * FROM tb_guru";
$result = mysqli_query($koneksi, $query);
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Tambah</h1><br><br>
            <form  action="tambahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Guru : </label>
                    <input type="text" readonly="" class="form-control" value="" name="nig">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" class="form-control" value="" name="nik" placeholder="Masukan Nomor Induk Penduduk">
                </div>
                <div class="form-group">
                    <label>Nomer Unik Pendidik dan Tenaga Kependidikan : </label>
                    <input type="text" class="form-control" value="" name="nuptk"  placeholder="Masukan Nomor Unik Pendidik dan Tenaga Kependidikan">
                </div>
                <div class="form-group">
                    <label>Nama Guru : </label>
                    <input type="" placeholder="Nama Guru" class="form-control" name="nm_guru">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin : </label>
                    <select name="jk" value="Laki Laki" class="form-control">
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                     <label>Tempat Lahir : </label>
                    <input type="text" placeholder="Tempat Lahir" class="form-control" name="tmpt_lahir">
                </div>  
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                    <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Agama : </label>
                    <input type="text" placeholder="Agama" class="form-control" name="agama">
                </div>
                <div class="form-group">
                    <label>Alamat Guru : </label>
                    <input type="text" placeholder="Alamat Guru" class="form-control" name="alamat_guru">
                </div>
                <div class="form-group">
                    <label>Status Guru : </label>
                    <select name="status_guru" class="form-control">
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Vertifikasi : </label>
                    <input type="text" placeholder="Masukan Vertifikasi" class="form-control" name="vertifikasi">
                </div>
                 <div class="form-group">
                    <label>Golongan : </label>
                    <input type="text" placeholder="Masukan Golongan" class="form-control" name="golongan">
                </div>
                 <div class="form-group">
                    <label>Nomer Telpon : </label>
                    <input type="text" placeholder="Masukan Nomor Telepon" class="form-control" name="no_telp">
                </div>
                <button type="tambah" name="tambah" value="tambah" class="btn btn-primary">Tambah Data</button>
                <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>