<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama motor</th>
            <th>Model</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama ?></td>
                <td><?php echo $brg->model ?></td>
                <td><?php echo $brg->tipe ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                
                <td align="center"><?php echo anchor('admin/data_barang/detail/' . $brg->idbarang, '<div class="btn btn-success btn-sm"><i class="fas fa-info"></i></div>') ?>
                </td>
                <td align="center"><?php echo anchor('admin/data_barang/edit/' . $brg->idbarang, ' <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                </td>
                <td align="center"> <?php echo anchor('admin/data_barang/hapus/' . $brg->idbarang, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form input data motor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('') . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Motor</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" name="tipe" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar motor</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>