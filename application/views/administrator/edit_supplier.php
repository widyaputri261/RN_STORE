<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Supplier</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/supplier" class="btn btn-danger"><i class="fa fa-times-circle"></i>Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/edit_supplier/<?= $supplier['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required autocomplete="off" value="<?= $supplier['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <?php $jk = $supplier['jk']; ?>
                    <select name="jk" id="jk" class="form-control" required>
                        <option value="">PILIH JENIS KELAMIN</option>
                        <option <?php echo ($jk == 'Laki-Laki') ? "selected" : "" ?>>Laki-Laki</option>
                        <option <?php echo ($jk == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" autocomplete="off" required value="<?= $supplier['no_telp']; ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="5" class="form-control" required><?= $supplier['alamat']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Supplier</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->