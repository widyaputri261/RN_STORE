<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4"><?= $paket['title']; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/paket" class="btn btn-info"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>assets/images/paket/<?= $paket['img']; ?>" class="card-img-top">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Rp <?= str_replace(",", ".", number_format($paket['price'])); ?></h5>
                        <table>
                            <tr>
                                <td>Kategori</td>
                                <td>: <?= $paket['title'] ?></td>
                            </tr>
                            <tr>
                                <td class="pr-3">Tanggal Input</td>
                                <td>: <?= $paket['date_submit']?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <?php if ($paket['publish'] == 1) { ?>
                                    <td>: Publish</td>
                                <?php } else { ?>
                                    <td>: Draft</td>
                                <?php } ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="container description-product-detail">
                    <strong><h4>Deskripsi</h4></strong>
                    <p><?= nl2br($paket['description']); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->