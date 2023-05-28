<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Fotografer</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/fotografer" class="btn btn-danger"><i class="fa fa-times-circle"></i>Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/edit_fotografer/<?= $fotografer['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama Fotografer</label>
                    <input type="text" class="form-control" name="name" id="name" required autocomplete="off" value="<?= $fotografer['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <?php $jk = $fotografer['jk']; ?>
                    <select name="jk" id="jk" class="form-control" required>
                        <option value="">PILIH JENIS KELAMIN</option>
                        <option <?php echo ($jk == 'Laki-Laki') ? "selected" : "" ?>>Laki-Laki</option>
                        <option <?php echo ($jk == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="5" class="form-control" required><?= $fotografer['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" autocomplete="off" required value="<?= $fotografer['no_telp']; ?>" />
                </div>
                <div class="form-group">
                    <label>Foto Lama</label> <br>
                    <input type="hidden" name="oldImg" value="<?= $fotografer['img']; ?>">
                    <img src="<?= base_url(); ?>assets/images/fotografer/<?= $fotografer['img']; ?>" style="width: 70px;">
                </div>
                <div class="form-group">
                    <label for="icon">Foto Baru</label> <br>
                    <input type="file" name="img" id="img" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Edit Fotografer</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->