<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/genio-slide-1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row text-center mt-4">
            <?php foreach ($Suzuki as $brg) : ?>

                <div class="card ml-3 mb-3" style="width: 16rem;">
                    <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $brg->nama ?></h5>
                        <small><?php echo $brg->model ?></small>
                        <small><?php echo $brg->tipe ?></small> <br>
                        <span class="badege badge-pill badge-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></span>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->idbarang, '<div class="btn btn-sm btn-primary">Tambah keranjang</div>') ?>
                        <?php echo anchor('dashboard/detail/' . $brg->idbarang, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>