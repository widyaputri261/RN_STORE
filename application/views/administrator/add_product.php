<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/products" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/product/add" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Isikan Nama Produk" autocomplete="off" required value="<?php echo set_value('title'); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cat">Kategori</label>
                            <select class="form-control" name="category" id="cat">
                                <option selected disabled value="0">--Pilih Kategori--</option>
                                <?php foreach ($categories->result_array() as $c) : ?>
                                    <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price_buy">Harga</label>
                            <input type="number" class="form-control" name="price_buy" id="price_buy" placeholder="Harga Beli" autocomplete="off" required value="<?php echo set_value('price_buy'); ?>">
                            <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh 30000</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Harga Jual" autocomplete="off" required value="<?php echo set_value('price'); ?>">
                            <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh 30000</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="stock">Jumlah</label>
                            <input type="number" class="form-control" name="stock" id="stock" placeholder="Jumlah Produk" autocomplete="off" required value="<?php echo set_value('stock'); ?>">
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="condit">Kondisi</label>
                            <select class="form-control" name="condit" id="condit">
                                <option value="1">Baru</option>
                                <option value="2">Bekas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="weight">Berat</label>
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="Berat Produk (dalam satuan gram)" autocomplete="off" required value="<?php echo set_value('weight'); ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="img">Foto Utama</label>
                            <input type="file" class="form-control" name="img" id="img" autocomplete="off" required value="<?php echo set_value('img'); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Publish</option>
                                <option value="2">Draft</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sendemail">Apakah kamu ingin mengirimkan notifikasi kepada pelanggan?</label>
                            <select name="sendemail" id="sendemail" class="form-control">
                                <option value="1">Ya Kirim</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" rows="7"><?php echo set_value('description'); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Unggah Produk</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->