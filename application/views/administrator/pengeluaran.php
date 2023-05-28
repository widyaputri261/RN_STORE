<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data Pengeluaran</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addPengeluaran">Tambah</a>
        </div>
        <div class="card-body">
            <?php if ($pengeluaran->num_rows() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Tanggal</th>
                                <th>Ket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody class="data-content">
                            <?php $no = 1; ?>
                            <?php foreach ($pengeluaran->result_array() as $data) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td><?= str_replace(",", ".", number_format($data['price'])); ?></td>
                                    <td><?= $data['date'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                    <td style="width: 100px;">
                                        <a href="<?= base_url(); ?>administrator/edit_pengeluaran/<?= $data['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
                                        <a href="<?= base_url(); ?>administrator/delete_pengeluaran/<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data pengeluaran ini?');" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    Opss, data pengeluaran masih kosong, yuk tambah sekarang
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Add Testimoni -->
<div class="modal fade" id="addPengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>administrator/pengeluaran" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control" id="title" name="title" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal Pembelian</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <textarea name="ket" id="ket" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnAddPengeluaran">
                        Tambahkan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>