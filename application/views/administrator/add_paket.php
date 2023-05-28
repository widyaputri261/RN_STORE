<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Paket</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/paket" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/paket/add" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Isikan Nama Paket" autocomplete="off" required value="<?php echo set_value('title'); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Harga Produk" autocomplete="off" required value="<?php echo set_value('price'); ?>">
                            <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh 30000</small>
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
                            <label for="img">Foto Utama</label>
                            <input type="file" class="form-control" name="img" id="img" autocomplete="off" required value="<?php echo set_value('img'); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" rows="7"><?php echo set_value('description'); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Unggah Paket</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->