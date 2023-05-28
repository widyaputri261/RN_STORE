<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Pesanan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/pesanpaket" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url() . 'administrator/add_process' ?>" method="post" name="formD" id="formD" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="invoice">Invoice *</label>
                            <input type="text" name="invoice" id="invoice" class="form-control" value="<?= $invoice ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama *</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_input">Tanggal*</label>
                            <input type="date" name="date_input" id="date_input" value="<?= date('Y-m-d') ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telp">Telp *</label>
                            <input type="number" name="telp" id="telp" class="form-control" required>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="paket_id">Kode Paket *</label>
                            <div class="form-group input-group">
                                <input type="hidden" name="item_id" id="item_id">
                                <input type="text" name="paket_id" id="paket_id" class="form-control" required>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Paket</label>
                                    <input type="text" name="paket_name" id="paket_name" class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="price">Harga</label>
                                    <input type="number" name="price" id="price" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jenis_acara">Jenis Acara</label>
                            <input type="text" name="jenis_acara" id="jenis_acara" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap *</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="regency">Kabupaten *</label>
                            <select name="regency" id="regency" class="form-control" required>
                                <option selected disabled value="0">--Pilih Kabupaten/Kota--</option>
                                <?php foreach ($regency->result_array() as $data) : ?>
                                    <option value="<?= $data['name'] ?>"><?= $data['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="biayaTambahan">Biaya Tambahan *</label>
                            <input type="number" name="biayaTambahan" id="biayaTambahan" onkeyup="calculate()" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date">Tanggal Acara*</label>
                            <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="time">Waktu*</label>
                            <input type="time" name="time" class="form-control" required>
                        </div>
                    </div>
                </div>
                <hr />
                <table>
                    <tr>
                        <td style="width:760px;" rowspan="2"><button type="submit" name="add_order" class="btn btn-info btn-lg"> Simpan</button></td>
                        <th style="width:140px;">Total Belanja(Rp)</th>
                        <th style="text-align:right;width:140px;"><input type="text" name="total" id="total" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
                    </tr>
                    <tr>
                        <th>Tunai(Rp)</th>
                        <th style="text-align:right;"><input type="text" id="jml_bayar" name="jml_bayar" class="jml_bayar form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                    </tr>
                    <tr>
                        <td></td>
                        <th>Kembalian(Rp)</th>
                        <th style="text-align:right;"><input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                    </tr>
                </table>
                <hr />
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Paket Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 8%;">Kode Paket</th>
                            <th class="text-center" style="width: 40%;">Nama Paket</th>
                            <th class="text-center" style="width: 15%;">Harga</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $data->paketId ?></td>
                                <td><?= $data->paketTitle ?></td>
                                <td class="text-right">Rp <?= str_replace(",", ".", number_format($data->paketPrice)) ?></td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-info" id="selectPaket" data-id="<?= $data->paketId ?>" data-title="<?= $data->paketTitle ?>" data-price="<?= $data->paketPrice ?>">
                                        <i class="fa fa-check"> Select</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        //change selectboxes to selectize mode to be searchable
        $("select").select2();
    });

    function calculate() {
        var price = document.getElementById('price').value;
        var tambahan = document.getElementById('biayaTambahan').value;
        var result = parseInt(price) + parseInt(tambahan);
        if (!isNaN(result)) {
            document.getElementById('total').value = result;
        }
    }

    $(function(){
            $('#jml_bayar').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_bayar').val();
                var hsl=jumuang.replace(/[^\d]/g,"");                
                $('#kembalian').val(hsl-total);
            })
            
        });
</script>