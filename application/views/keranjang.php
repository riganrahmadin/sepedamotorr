<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Motor</th>
            <th>Jumlah</th>
            <th>harga</th>
            <th>Sub_Total</th>
        </tr>
        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td align="center"><?php echo $items['qty'] ?></td>
                <td align="center">Rp.<?php echo number_format($items['price'], 0, ',', '.') ?></td>
                <td align="center">Rp.<?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>
                <td> <?php echo anchor('dashboard/hapus_item_keranjang/'. $items['rowid'],'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">

            </td>
            <td align="center">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>

    </table>

    <div class="text-right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class=" btn btn-sm btn-danger">Hapus keranjang</div>
        </a>
        <a href="<?php echo base_url('dashboard/index') ?>">
            <div class=" btn btn-sm btn-primary">Lanjutkan belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class=" btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>