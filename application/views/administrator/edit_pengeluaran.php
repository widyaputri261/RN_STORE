<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Pengeluaran</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/pengeluaran" class="btn btn-danger"><i class="fa fa-times-circle"></i>Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/edit_pengeluaran/<?= $pengeluaran['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Nama</label>
                    <input type="text" class="form-control" name="title" id="title" required autocomplete="off" value="<?= $pengeluaran['title']; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" name="price" id="price" required autocomplete="off" value="<?= $pengeluaran['price']; ?>">
                </div>
                <div class="form-group">
                    <label for="date">Tanggal Pembelian</label>
                    <input type="datetime-local" class="form-control" name="date" id="date" required autocomplete="off" value="<?= $pengeluaran['date']; ?>">
                </div>
                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <textarea name="ket" id="ket" cols="30" rows="10"><?php echo $pengeluaran['ket'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Pengeluaran</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->