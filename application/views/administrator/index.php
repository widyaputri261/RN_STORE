<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <?php $data = $this->db->get('categories')->num_rows(); ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $data = $this->db->get('products')->num_rows(); ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $data = $this->db->get('products', ['promo_price !=' => 0])->num_rows(); ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Promo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $data = $this->db->get('paket')->num_rows(); ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Paket</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Penjualan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($penjualan['total_price'], 0) ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="assets/images/background/icon_rp.jpg" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($pemesanan['total'], 0) ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="assets/images/background/icon_rp.jpg" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pembelian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($pembelian['total'], 0) ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="assets/images/background/icon_rp.jpg" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengeluaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($pengeluaran['price'], 0) ?></div>
                        </div>
                        <div class="col-auto">
                            <img src="assets/images/background/icon_rp.jpg" width="25px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->db->limit(5);
    $data = $this->db->get_where('invoice'); ?>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Pesanan Masuk
                </div>
                <div class="card-body">
                    <?php if ($data->num_rows() > 0) { ?>
                        <table class="table table-bordered">
                            <tr>
                                <th>Invoice</th>
                                <th>Nama</th>
                                <th>Total</th>
                                <th>Payment</th>
                            </tr>
                            <?php foreach ($data->result_array() as $d) : ?>
                                <tr>
                                    <td><?= $d['invoice_code'] ?></td>
                                    <td><?= $d['name'] ?></td>
                                    <td><?= number_format($d['total_all'], 0, ",", ".") ?></td>
                                    <?php if ($d['pay_status'] == 'expire') { ?>
                                        <td><span class="status-expired">Expired</span></td>
                                    <?php } else if ($d['pay_status'] == 'pending') { ?>
                                        <td><span class="status-pending">Belum Dibayar</span></td>
                                    <?php } else if ($d['pay_status'] == 'settlement') { ?>
                                        <td><span class="status-settlement">Lunas</span></td>
                                    <?php } else if ($d['pay_status'] == 'cancel') { ?>
                                        <td><span class="status-cancel">Dibatalkan</span></td>
                                    <?php } else if ($d['pay_status'] == 'failure') { ?>
                                        <td><span class="status-failure">gagal</span></td>
                                    <?php } else { ?>
                                        <td><span class="status-pending">Belum Dibayar</span></td>
                                    <?php } ?>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-warning">Belum ada pesanan masuk</div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Jumlah Stock Produk Per Kategori
                </div>
                <canvas id="myChartStock"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Grafik Penjualan Produk
                </div>
                <canvas id="myChartProduct"></canvas>

            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Grafik Pemesanan Jasa
                </div>
                <canvas id="myChartPaket"></canvas>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header">
            Grafik Produk Terlaris
        </div>
        <canvas id="produkTerlaris"></canvas>
    </div>





</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
    var ctx1 = document.getElementById('myChartStock').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: [
                <?php
                if (count($stok) > 0) {
                    foreach ($stok as $data) {
                        echo "'" . $data->categoriesName . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Produk',
                backgroundColor: '#7FFF00',
                borderColor: '#93C3D2',
                data: [
                    <?php
                    if (count($stok) > 0) {
                        foreach ($stok as $data) {
                            echo $data->total . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>
<script type="text/javascript">
    var ctx2 = document.getElementById('myChartProduct').getContext('2d');
    var chart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: [
                <?php
                if (count($jual) > 0) {
                    foreach ($jual as $data) {
                        echo "'" . $data->date . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Total Penjualan',
                borderColor: '#1E90FF',
                data: [
                    <?php
                    if (count($jual) > 0) {
                        foreach ($jual as $data) {
                            echo $data->total . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>
<script type="text/javascript">
    var ctx3 = document.getElementById('myChartPaket').getContext('2d');
    var chart3 = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: [
                <?php
                if (count($pesan) > 0) {
                    foreach ($pesan as $data) {
                        echo "'" . $data->date . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Total Pemesanan',
                borderColor: '#f00',
                data: [
                    <?php
                    if (count($pesan) > 0) {
                        foreach ($pesan as $data) {
                            echo $data->total . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>
<script type="text/javascript">
    var ctx1 = document.getElementById('produkTerlaris').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: [
                <?php
                if (count($terlaris) > 0) {
                    foreach ($terlaris as $data) {
                        echo "'" . $data->title . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Produk Terjual',
                backgroundColor: '#00BFFF',
                borderColor: '#93C3D2',
                data: [
                    <?php
                    if (count($terlaris) > 0) {
                        foreach ($terlaris as $data) {
                            echo $data->transaction . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>