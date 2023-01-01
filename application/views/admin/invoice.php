<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama pemesan</th>
            <th>Alamat pengiriman</th>
            <th>Tanggal pemesanan</th>
            <th>Batas pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($invoice as $inv) : ?>

            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tglpesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn bt-sm btn-primary">Detail</div>' )?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>