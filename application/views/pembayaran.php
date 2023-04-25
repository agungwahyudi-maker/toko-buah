<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
            $grand_total=0;
            if($keranjang=$this->cart->contents())
            {
                foreach($keranjang as $item)
                {
                    $grand_total=$grand_total+$item['subtotal'];
                }
                echo"Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
             ?>
            </div>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="POST">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" required id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" required id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="No aktif" required id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Pilih Metode Bayar</label>
                    <select name="metode_bayar" id="" class="form-control">
                        <option value="cod">COD</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Pesan</button>
            </form>
            <?php 
            }else{
                echo"Keranjang Belanja anda Masih Kosong";
            } ?>
        </div><br><br>

        <div class="col-md-2"></div>
    </div>
</div>