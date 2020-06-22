<?php 
include '../../config/koneksi.php'; 
include '../header.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_jurusan WHERE kd_jurusan = '$id'";
$result = mysqli_query($koneksi, $query);
($d = mysqli_fetch_array($result));
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Ubah</h1>
            <form action="ubahproses.php" method="post">
                <div class="form-group">
                    <label>Kode Jurusan : </label>
                    <input type="text" readonly="" class="form-control" value="<?= $d['kd_jurusan'];?>" name="kd_jurusan">
                </div>
                <div class="form-group">
                    <label>Nama Jurusan : </label>
                    <input type="text" class="form-control" value="<?= $d['nm_jurusan'];?>" name="nm_jurusan">
                </div>
                <div class="form-group">
                    <label>NIG : </label>
                    <select name="nig" class="form-control">
                <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM `tb_guru`");
                    while ($d = mysqli_fetch_assoc($data)) {
                ?>
                    <option value="<?= $d["nig"] ?>"><?= $d["nm_guru"] ?></option>
                <?php } ?> 
                    </select>    
                </div>
            <button type="ubah" name="ubah" value="ubah" class="btn btn-primary">Ubah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>