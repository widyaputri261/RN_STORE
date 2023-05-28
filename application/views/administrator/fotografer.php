<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Fotografer</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addFotografer">Tambah Fotografer</a>
        </div>
        <div class="card-body">
            <?php if ($fotografer->num_rows() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="data-content">
                            <?php $no = 1; ?>
                            <?php foreach ($fotografer->result_array() as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img style="width: 50px;" src="<?= base_url(); ?>assets/images/fotografer/<?= $data['img']; ?>"></td>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= $data['jk']; ?></td>
                                    <td><?= $data['alamat']; ?></td>
                                    <td><?= $data['no_telp']; ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>administrator/edit_fotografer/<?= $data['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                        <a href="<?= base_url() ?>administrator/delete_fotografer/<?= $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus fotografer ini?')"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    Opss, data fotografer masih kosong, yuk tambah sekarang.
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Add Category -->
<div class="modal fade" id="addFotografer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Fotografer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>administrator/fotografer" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nama Fotografer</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option>Pilih Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="img">Foto</label>
                        <input type="file" class="form-control" required name="img" id="img" />
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnAddFotografer">
                        Tambahkan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>