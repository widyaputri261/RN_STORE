<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Paket</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/paket/add" class="btn btn-primary btn-sm">Tambah Paket</a>
            <form action="<?= base_url(); ?>administrator/paket/search" method="get" class="form-inline float-right">
                <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q" autocomplete="off" value="<?= $search; ?>">
                <button class="btn btn-sm btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <?php if ($getPaket->num_rows() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <!-- <th>Kategori</th> -->
                                <th style="width: 150px;">Tanggal Input</th>
                                <th>Status</th>
                                <th style="width: 130px;">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody class="data-content">
                            <?php $no = $this->uri->segment(3) + 1; ?>
                            <?php foreach ($getPaket->result_array() as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img style="width: 50px;" src="<?= base_url(); ?>assets/images/paket/<?= $data['paketImg']; ?>"></td>
                                    <td><?= $data['paketTitle']; ?></td>
                                    <td><?= str_replace(",", ".", number_format($data['paketPrice'])); ?></td>
                                    <!-- <td><?= $data['categoriesName']; ?></td> -->
                                    <td><?= $data['paketDate']; ?></td>
                                    <?php if ($data['paketPublish'] == 1) { ?>
                                        <td>Publish</td>
                                    <?php } else { ?>
                                        <td>Draft</td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url(); ?>administrator/detail_paket/<?= $data['paketId']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url() ?>administrator/paket/<?= $data['paketId']; ?>/edit" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                        <a href="<?= base_url() ?>administrator/delete_paket/<?= $data['paketId']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus paket ini?')"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    Opss, paket masih kosong, yuk tambah paket sekarang.
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->