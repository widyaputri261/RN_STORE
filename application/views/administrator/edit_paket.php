<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Edit Paket</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url(); ?>administrator/paket" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('failed'); ?>
			<form action="<?= base_url(); ?>administrator/paket/<?= $paket['paketId'] ?>/edit" method="post" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="title">Nama</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Isikan Nama Paket" autocomplete="off" required value="<?= $paket['title']; ?>" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Harga</label>
							<input type="number" class="form-control" id="price" name="price" placeholder="Harga Paket" autocomplete="off" required value="<?= $paket['price']; ?>" />
							<small id="priceHelp" class="form-text text-muted">Isikan tanpa tanda pemisah. Contoh pengisian 300000</small>
						</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="img">Foto Utama</label>
							<input type="file" name="img" id="img" class="form-control" />
						</div>
						<label>Foto Lama</label>
						<img src="<?= base_url(); ?>assets/images/paket/<?= $paket['img']; ?>" style="width: 150px">
						<input type="hidden" name="oldImg" value="<?= $paket['img']; ?>">
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="status">Status</label>
							<select class="form-control" id="status" name="status">
								<?php if ($paket['publish'] == 1) { ?>
									<option value="1">Publish</option>
									<option value="2">Draft</option>
								<?php } else { ?>
									<option value="2">Draft</option>
									<option value="1">Publish</option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="description">Deskripsi</label>
					<textarea class="form-control" id="description" name="description" rows="7"><?= $paket['description']; ?></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Edit Paket</button>
			</form>
		</div>
	</div>
</div>
<!-- /.container-fluid -->