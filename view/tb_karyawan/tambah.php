<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$query = "SELECT * FROM tb_guru";
$result = mysqli_query($koneksi, $query);
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Tambah</h1>
            <form action="tambahproses.php" method="post">
                <div class="form-group">
                    <label>Nomor Induk Karyawan : </label>
                    <input type="text" readonly="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan : </label>
                    <input type="text" class="form-control" value="" name="nik">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan : </label>
                    <input type="text" class="form-control" value="" name="nm_karyawan">
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
                    <input type="text" class="form-control" value="" name="tmpt_lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir : </label>
                     <input type="date" class="form-control" value="" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Agama : </label>
                     <input type="text" placeholder="Masukan Agama" class="form-control" value="" name="agama">
                </div>
                <div class="form-group">
                    <label>Alamat Karyawan : </label>
                     <input type="text" placeholder="Masukan Alamat" class="form-control" value="" name="alamat_karyawan">
                </div>
                 <div class="form-group">
                    <label>Nomer Telpon : </label>
                     <input type="text" placeholder="Masukan Nomer Telpon" class="form-control" value="" name="no_telp">
                </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>