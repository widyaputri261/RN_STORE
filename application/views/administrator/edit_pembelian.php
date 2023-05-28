<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Pembelian</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/pembelian" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <form action="<?= base_url(); ?>administrator/pembelian/<?= $pembelian['pembelianId'] ?>/edit" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="date" name="date" autocomplete="off" required value="<?= $pembelian['date']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <select class="form-control" id="sup" name="supplier">
								<option value="<?= $pembelian['supplier'] ?>"><?= $pembelian['nama'] ?></option>
								<?php foreach($supplier->result_array() as $s): ?>
								<option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
								<?php endforeach; ?>
							</select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="product">Nama Produk</label>
                            <input type="text" class="form-control" name="product" id="product" placeholder="Isikan Nama Produk" autocomplete="off" required value="<?= $pembelian['product']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qty">Jumlah</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Jumlah Produk" autocomplete="off" required value="<?= $pembelian['qty']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="price_buy">Harga Beli</label>
                            <input type="number" class="form-control" name="price_buy" id="price_buy" placeholder="Harga Beli" autocomplete="off" required value="<?= $pembelian['price_buy']; ?>">
                            <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh 30000</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price_sell">Harga Jual</label>
                            <input type="number" class="form-control" name="price_sell" id="price_sell" placeholder="Harga Jual" autocomplete="off" required value="<?= $pembelian['price_sell']; ?>">
                            <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh 30000</small>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Pembelian</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->