<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/lokasi" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>

        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/lokasi/add" method="post">
                <div class="form-group">
                    <label for="regency">Kabupaten atau Kota</label>
                    <select name="regency" id="regency" class="form-control" required>
                        <option selected disabled value="0">--Pilih Kabupaten/Kota--</option>
                        <?php foreach ($regency->result_array() as $r) : ?>
                            <option><?= $r['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Biaya</label>
                    <input type="number" class="form-control" id="price" name="price" autocomplete="off" required>
                    <small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh pengisian 30000</small>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        //change selectboxes to selectize mode to be searchable
        $("select").select2();
    });
</script>