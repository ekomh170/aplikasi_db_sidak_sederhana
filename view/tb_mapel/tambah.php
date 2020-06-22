<?php 
include '../../config/koneksi.php'; 
include '../header.php';
?>
 <div class="container">
     <div class="row">
         <div class="col-sm-6 mr-auto ml-auto pt-5">
            <h1 class="text-center">Form Data Tambah</h1>
            <form action="tambahproses.php" method="post">
                <div class="form-group">
                    <label>Kode Mapel : </label>
                    <input type="text" readonly="" class="form-control" value="" name="kd_mapel">
                </div>
                <div class="form-group">
                    <label>Nama Mapel : </label>
                    <input type="text" class="form-control" value="" name="nm_mapel">
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
            <button type="tambah" name="tambah" value="tambah" class="btn btn-primary">Tambah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>