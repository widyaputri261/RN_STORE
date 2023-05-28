<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Testimoni</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/testimonials" class="btn btn-danger"><i class="fa fa-times-circle"></i>Batal</a>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>administrator/testimonial/<?= $testi['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" required autocomplete="off" value="<?= $testi['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="content">Isi</label> <br>
                    <textarea name="content" id="content" rows="5" class="form-control" required><?= $testi['content']?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Testimoni</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->