<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Tambah Pembelian</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>administrator/pembelian" class="btn btn-danger"><i class="fa fa-times-circle"></i> Batal</a>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url() . 'administrator/process' ?>" method="post">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Tanggal Pembelian *</label>
                            <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier">Supplier *</label>
                            <select name="supplier" id="supplier" class="form-control" required>
                                <option value="">--Pilih Supplier--</option>
                                <?php foreach($supplier as $s => $data) { 
                                    echo '<option value="'.$data->id.'">'.$data->nama.'</option>';
                                } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="product_id">Kode Barang *</label>
                            <div class="form-group input-group">
                                <input type="hidden" name="item_id" id="item_id">
                                <input type="text" name="product_id" id="product_id" class="form-control" required>
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
                                    <label>Nama Barang</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Stock</label>
                                    <input type="number" name="stock" id="stock" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input type="number" name="price_buy" id="price_buy" class="form-control" required onkeyup="sum();">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="number" name="price_sell" id="price_sell" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qty">Qty *</label>
                            <input type="number" name="qty" id="qty" class="form-control" required onkeyup="sum();">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="total">Total *</label>
                            <input type="number" name="total" id="total" class="form-control" readonly>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" name="in_add" class="btn btn-success btn-flat">
                        <i class="fa fa-paper-plane">Save</i>
                    </button>
                    <button type="Reset" class="btn btn-flat">Reset</button>
                </div>
                <hr />
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-item">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Product Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 8%;">Kode Barang</th>
                            <th class="text-center" style="width: 40%;">Nama Barang</th>
                            <th class="text-center" style="width: 8%;">Stock</th>
                            <th class="text-center" style="width: 15%;">Harga Beli</th>
                            <th class="text-center" style="width: 15%;">Harga Jual</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($item as $i => $data) { ?>
                        <tr>
                            <td><?=$data->productsId?></td>
                            <td><?=$data->productsTitle?></td>
                            <td class="text-right"><?=$data->productsStock?></td>
                            <td class="text-right">Rp <?= str_replace(",", ".", number_format($data->productsPriceBuy))?></td>
                            <td class="text-right">Rp <?= str_replace(",", ".", number_format($data->productsPrice))?></td>
                            <td class="text-right">
                                <button class="btn btn-xs btn-info" id="select" 
                                data-id="<?=$data->productsId?>"
                                data-title="<?=$data->productsTitle?>"
                                data-stock="<?=$data->productsStock?>"
                                data-buy="<?=$data->productsPriceBuy?>"
                                data-sell="<?=$data->productsPrice?>">
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

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('price_buy').value;
      var txtSecondNumberValue = document.getElementById('qty').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>

