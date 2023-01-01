<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA MOTOR</h3>
    <?php foreach ($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Nama Motor</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $brg->nama ?>">
            </div>
            <div class="for-group">
                <label>Model</label>
                <input type="hidden" name="idbarang" class="form-control" value="<?php echo $brg->idbarang ?>">
                <input type="text" name="model" class="form-control" value="<?php echo $brg->model ?>">
            </div>
            <div class="for-group">
                <label>Tipe</label>
                <input type="text" name="tipe" class="form-control" value="<?php echo $brg->tipe ?>">
            </div>
            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>
            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3" >Simpan</button>
        </form>

    <?php endforeach; ?>
</div>