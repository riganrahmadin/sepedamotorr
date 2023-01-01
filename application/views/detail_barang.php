<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>

                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Motor</td>
                                <td><strong><?php echo $brg->nama ?></strong></td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                </td>
                                <td><strong><?php echo $brg->model ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td><strong><?php echo $brg->tipe ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->idbarang, '<div class="btn btn-sm btn-primary">Tambah keranjang</div>') ?>
                        <?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali ke utama</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>