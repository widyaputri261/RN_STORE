<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Transaksi Pembelian</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url(); ?>administrator/pembelian/add" class="btn btn-primary btn-sm">Tambah Pembelian</a>
        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <?php if ($getPembelian->num_rows() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Total</th>
                                <th>Supplier</th>
                                <th>Date</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody class="data-content">
                            <?php $no = $this->uri->segment(3) + 1; ?>
                            <?php foreach ($getPembelian->result_array() as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['productTitle']; ?></td>
                                    <td><?= $data['pembelianQty']; ?></td>
                                    <td>Rp <?= str_replace(",", ".", number_format($data['pembelianPricebuy'])); ?></td>
                                    <td>Rp <?= str_replace(",", ".", number_format($data['pembelianPricesell'])); ?></td>
                                    <td>Rp <?= str_replace(",", ".", number_format($data['pembelianTotal'])); ?></td>
                                    <td><?= $data['supplierNama']; ?></td>
                                    <td><?= $data['pembelianDate']; ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>administrator/del_pembelian/<?= $data['pembelianId']; ?>/<?=$data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')"><i class="fa fa-trash-alt"></i></a>

                                        <!-- <a href="<?= base_url() ?>administrator/delete_pembelian/<?= $data['pembelianId']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')"><i class="fa fa-trash-alt"></i></a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning" role="alert">
                    Opss, Data pembelian masih kosong, yuk tambah sekarang.
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->