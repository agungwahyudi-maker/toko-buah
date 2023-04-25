<div class="container-fluid">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item" data-interval="10000">
                <img src="<?php echo base_url('uploads/slide/slide1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="<?php echo base_url('uploads/slide/slide3.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="<?php echo base_url('uploads/slide/slide2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="m-3 text-center">
        <h2>Produk</h2>
    </div>
    <div class="row">
        <?php foreach($rp3035 as $brg ): ?>
        <div class="card m-2" style="width: 16rem">
            <img src="<?php echo base_url().'./uploads/produk/'.$brg->gambar ?>" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp.
                    <?php echo number_format($brg->harga, 0,',','.') ?></span>
                <br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-success" style=""><i class="fas fa-plus mr-1"></i>Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-primary" style="">Detail</div>') ?>

            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>