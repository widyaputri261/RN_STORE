<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Data Jadwal Fotografi</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
		</div>
		<div class="card-body">
			<?php if ($jadwal->num_rows() > 0) { ?>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Pemesan</th>
								<th>Acara</th>
								<th>Lokasi</th>
								<th>Tanggal/Waktu Acara</th>
								<th>Alamat</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot></tfoot>
						<tbody class="data-content">
							<?php $no = $this->uri->segment(3) + 1; ?>
							<?php foreach ($jadwal->result_array() as $data) : ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $data['nama']; ?></td>
									<td><?= $data['jenis_acara']; ?></td>
									<td><?= $data['lokasi']; ?></td>
									<td><?= $data['date']; ?> <?= $data['time']; ?></td>
									<td><?= $data['alamat']; ?></td>
									<?php if ($data['status'] == '0') { ?>
										<td><span>Belum Selesai</span></td>
									<?php } else if ($data['status'] == '1') { ?>
										<td><span>Selesai</span></td>
									<?php } ?>

									<?php if ($data['status'] == '0') { ?>
										<td>
											<a href="<?= base_url(); ?>administrator/pesanan_selesai/<?= $data['id']; ?>" onclick="return confirm('Yakin pesanan ini sudah selesai?');" class="btn btn-success btn-sm">Selesai</a>
										</td>
									<?php } else if ($data['status'] == '1') { ?>
										<td></td>
									<?php } ?>
									
								</tr>
								<?php $no++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?= $this->pagination->create_links(); ?>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning" role="alert">
					Opss, pesanan masih kosong.
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->