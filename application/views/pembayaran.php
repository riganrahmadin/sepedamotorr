<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>input alamat pengiriman dan pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama pengirim</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama lengkap Anda">
                </div>
                <div class="form-group">
                    <label>Alamat lengkap</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat lengkap Anda">
                </div>
                <div class="form-group">
                    <label>No. telepon</label>
                    <input class="form-control" type="text" name="no_telp" placeholder="Nomor telepon lengkap Anda">
                </div>
                <div class="form-group">
                    <label>Jasa pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jasa pengiriman</label>
                    <select class="form-control">
                        <option>BNI - xxxxx</option>
                        <option>Go-jek - xxxxx</option>
                        <option>BRI - xxxxx</option>
                        <option>BCA - xxxxx</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $items) {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h5>Total Belanja  : Rp." . number_format($grand_total, 0, ',', '.');
                 ?>
            </div>
            <?php 
                }else{
                    echo "<h5>Keranjang Belanja anda Kosong";
                }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>