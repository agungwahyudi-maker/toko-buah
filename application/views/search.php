<div class="container-fluid">
    <div class="row go">
        <br><br>
        <?php foreach($barang as $brg ): ?>
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