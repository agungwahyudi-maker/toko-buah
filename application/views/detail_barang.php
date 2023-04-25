<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach($barang as $brg) :?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/produk/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>
                                <strong>
                                    <div class="btn btn-warning btn-sm">Rp.
                                        <?php echo number_format($brg->harga,0,',','.') ?>
                                    </div>
                                </strong>
                            </td>
                        </tr>

                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-success" style=""><i class="fas fa-plus mr-1"></i>Keranjang</div>') ?>
                    <a href="<?= base_url(); ?>">
                        <div class="btn btn-sm btn-danger" style="">Kembali</div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>