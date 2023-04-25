<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped ">
        <tr class="text-small" style="font-size:14px;">
            <th>No</th>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>NO Telp</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php 
        foreach($invoice as $inv): ?>
        <tr style="font-size:12px;" class="<?php if($inv->status==0){echo "bg-primary text-light";} ?>">
            <td><?php echo ++$start ?></td>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td>0<?php echo $inv->no_wa ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td>
                <?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-warning">Detail</div>') ?>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <?= $this->pagination->create_links(); ?>
</div>