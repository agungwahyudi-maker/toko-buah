<div class="container-fluid">
    <h1 class="mt-4"><i class="fas fa-edit"></i>Edit Barang</h1>
    <?php foreach($barang as $brg): ?>
    <form method="POST" action="<?php echo base_url().'admin/data_barang/update' ?>">
        <div class="for-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
        </div>
        <div class="for-group">
            <label for="">Keterangan</label>
            <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
        </div>
        <div class="for-group">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
        </div>
        <div class="for-group">
            <label for="">Stok</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
    </form>
    <?php endforeach; ?>
</div>