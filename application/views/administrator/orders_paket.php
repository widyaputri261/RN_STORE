<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Data Pesanan</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?php echo base_url(); ?>administrator/pesanpaket/add" class="btn btn-primary btn-sm">Tambah Pesanan</a>
		</div>
		<div class="card-body">
			<?php if ($orders_paket->num_rows() > 0) { ?>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Kode/Invoice</th>
								<th>Nama</th>
								<th>Nama Paket</th>
								<th>Total Pesanan</th>
								<!-- <th>Tanggal Pesan</th> -->
								<!-- <th>Order Status</th> -->
								<!-- <th>Pay Status</th> -->
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot></tfoot>
						<tbody class="data-content">
							<?php $no = $this->uri->segment(3) + 1; ?>
							<?php foreach ($orders_paket->result_array() as $data) : ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $data['invoice_code']; ?></td>
									<td><?= $data['nama']; ?></td>
									<td><?= $data['paket']; ?></td>
									<td>Rp <?= number_format($data['total'], 0, ",", "."); ?></td>
									<td>
										<a href="<?= base_url(); ?>administrator/detail_order_paket/<?= $data['invoice_code']; ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
										<a href="<?= base_url(); ?>administrator/print_detail_order_paket/<?= $data['invoice_code']; ?>" class="btn btn-success btn-sm"><i class="fa fa-print"></i></a>
									
									</td>
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