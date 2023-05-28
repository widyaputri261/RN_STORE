<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Lokasi</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/lokasi/add" class="btn btn-sm btn-info">Tambah</a>
        </div>
        <div class="card-body">
            <?php if ($lokasi->num_rows() > 0) { ?>
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Kabupaten/Kota</th>
                        <th>Biaya</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $no = 1; ?>
                    <?php foreach ($lokasi->result_array() as $data) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['regency']; ?></td>
                        <td>Rp <?= number_format($data['price'], 0, ",", "."); ?></td>
                        <td style="width: 100px;">
                            <a href="<?= base_url(); ?>administrator/lokasi/<?= $data['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                            <a href="<?= base_url(); ?>administrator/delete_lokasi/<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus lokasi ini?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            <?php } else { ?>
                <div class="alert alert-warning">Belum ada lokasi yang diinputkan.</div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->