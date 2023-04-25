<div class="container-fluid">
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i
            class="fas fa-plus fa-sm mr-2"></i>Tambah Barang</button>
    <table class="table mt-3 table-bordered">
        <tr class="text-center bg-success text-light">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th coolspan="2">Aksi</th>
        </tr>
        <?php         
        foreach($barang as $brg): ?>
        <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $brg->nama_brg ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            <td coolspan="2">
                <?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'<div  class="btn btn-sm btn-primary ms-2 me-2"  data-toggle="tooltip" title="Update"><i class="fas fa-edit"></i></div>') ?>
                <?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg.'/'.$brg->gambar,'<div class="btn btn-sm btn-danger"data-toggle="tooltip" title="Delete" style="margin-right:-50px;"><i
                                        class="fas fa-trash"></i></div>') ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?= $this->pagination->create_links(); ?>
</div>
</div>
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Gambar</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> -->
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'; ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar Produk</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>

            </div>
            </form>
        </div>
    </div>
</div>