<?php echo $this->session->flashdata('success'); ?>
<?php echo $this->session->flashdata('error'); ?>

<div class="wrapper">
    <div class="navigation">
        <a href="<?= base_url(); ?>">Home</a>
        <i class="fa fa-caret-right"></i>
        <a>Troli</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Keranjang Produk
        </div>
        <div class="card-body">
            <div class="core mt-4">
                <div class="product">
                    <?php if ($cart->num_rows() > 0) { ?>
                        <?php foreach ($cart->result_array() as $item) : ?>
                            <div class="item">
                                <div class="item-main">
                                    <img src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>" alt="<?= $item['product_name']; ?>">
                                    <a href="<?= base_url(); ?>p/<?= $item['slug']; ?>">
                                        <h2 class="title mb-0"><?= $item['product_name']; ?></h2>
                                    </a>
                                    <?php if ($item['qty'] > $item['stock']) { ?>
                                        <small class="text-muted">Jumlah: <?= $item['qty']; ?></small>
                                        <p style="color: red;">Pembelian melebihi stok yang tersedia. Silahkan sesuaikan jumlah pembelian pada tombol dibawah ini.</p>
                                        <br>
                                        <a href="#" data-toggle="modal" data-target="#modalUbah" onclick="showModalUbah('<?= $item['id']; ?>')" class="ubah_<?= $item['id']; ?> btn btn-sm btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                    <?php } else { ?>
                                        
                                        <small class="text-muted">Jumlah: <?= $item['qty']; ?></small>
                                        <h3 class="price mt-0 mb-0">Rp <?= number_format($item['price'] * $item['qty'], 0, ",", "."); ?></h3>
                                        <?php if ($item['ket'] == '') { ?>
                                            <small class="desc_product_<?= $item['id']; ?>"><a href="#" data-toggle="modal" data-target="#modalAddDescription" onclick="showModalAddKet('<?= $item['id']; ?>')">Tambah keterangan</a></small>
                                        <?php } else { ?>
                                            <small class="desc_product_<?= $item['id']; ?>">Ket: <?= $item['ket']; ?> <a href="#" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('<?= $item['id']; ?>')"><i class="fa text-info fa-edit"></i></a></small>
                                        <?php } ?>
                                        <div class="clearfix"></div>
                                        <br>
                                        <a href="#" data-toggle="modal" data-target="#modalUbah" onclick="showModalUbah('<?= $item['id']; ?>')" class="ubah_<?= $item['id']; ?> btn btn-sm btn-info"><i class="fa fa-edit"></i> Ubah</a>
                                    <?php } ?>
                                </div>

                                <a href="<?= base_url(); ?>cart/delete/<?= $item['id']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini dari troli?')"><i class="fa fa-trash"></i></a>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                        <a href="<?= base_url(); ?>cart/delete_cart" onclick="return confirm('Apakah Anda yakin akan mengosongkan Troli?')"><button class="btn btn-outline-dark">Kosongkan Troli</button></a>
                    <?php } else { ?>
                        <div class="alert alert-warning">Upss. Troli masih kosong. Yuk belanja terlebih dahulu..</div>
                        <br><br><br>
                    <?php } ?>
                </div>
                <?php
                $totalall = 0;
                $totalitem = 0;
                foreach ($cartStock->result_array() as $c) {
                    $totalall += intval($c['price']) * intval($c['qty']);
                    $totalitem += intval($c['qty']);
                }
                ?>
                <div class="total shadow">
                    <h2 class="title">Ringkasan Belanja</h2>
                    <hr>
                    <div class="list">
                        <p>Total Jumlah Barang</p>
                        <p><?= $totalitem; ?></p>
                    </div>
                    <div class="list">
                        <p>Total Harga Barang</p>
                        <p>Rp <?= number_format($totalall, 0, ",", "."); ?></p>
                    </div>
                    <?php if ($cart->num_rows() > 0) { ?>
                        <?php if ($stock->num_rows() > 0) { ?>
                            <br>
                            <p style="color: red;"><b>Sesuaikan jumlah pembelian dengan stok yang tersedia</b></p>
                        <?php }else{ ?>
                            <a href="<?= base_url(); ?>payment">
                            <button class="btn btn-dark btn btn-block mt-2">Lanjut ke Pembayaran</button>
                        </a>
                        <a href="<?= base_url(); ?>products">
                            <button class="btn btn-dark btn btn-block mt-2">Belanja Lagi</button>
                        </a>
                        <?php } ?>
                        
                    <?php }else{ ?>
                        <a href="<?= base_url(); ?>products">
                            <button class="btn btn-dark btn btn-block mt-2">Belanja Dulu</button>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Ket Produk-->
<div class="modal fade" id="modalEditDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Deskripsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalEditKet">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnEditKetProduct" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Ket Produk-->
<div class="modal fade" id="modalAddDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Deskripsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalAddKet">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnSaveKetProduct" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal ubah qty produk-->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Qty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalUbah">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnEditQty" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function showModalAddKet(id) {
        $("#bodyModalAddKet").html(`<div class="form-group">
            <textarea name="ket_product" id="ket_product" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll."></textarea>
            <input type="hidden" id="rowid_pro" value=${id}>
        </div>`);
    }

    function showModalEditKet(id) {
        $.ajax({
            url: "<?= base_url(); ?>cart/get_item",
            type: "post",
            dataType: "json",
            data: {
                id: id
            },
            success: function(res) {
                $("#bodyModalEditKet").html(`<div class="form-group">
                    <textarea name="ket_product" id="ket_product_edit" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll.">${res.ket}</textarea>
                    <input type="hidden" id="rowid_pro_edit" value=${id}>
                </div>`);
            }
        })
    }

    function showModalUbah(id) {
        $.ajax({
            url: "<?= base_url(); ?>cart/get_item",
            type: "post",
            dataType: "json",
            data: {
                id: id
            },
            success: function(res) {
                $("#bodyModalUbah").html(`<div class="form-group">
                <p><b>${res.product_name}</b></p>
				<p>Stok Tersedia: ${res.stock}</p>
                <input type="number" name="qty" id="qty_edit" value="${res.qty}">
                <input type="hidden" id="id_pro_edit" value=${res.id_product}>
                <input type="hidden" id="rowid_pro_edit" value=${id}>
                </div>`);
            }
        })
    }

    $("#btnSaveKetProduct").on('click', function() {
        const rowid = $("#rowid_pro").val();
        const ket = $("#ket_product").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function() {
                $("small.desc_product_" + rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })

    $("#btnEditKetProduct").on('click', function() {
        const rowid = $("#rowid_pro_edit").val();
        const ket = $("#ket_product_edit").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function() {
                $("small.desc_product_" + rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })

    $("#btnEditQty").on('click', function() {
        const rowid = $("#rowid_pro_edit").val();
        const qty = $("#qty_edit").val();
        const id = $("#id_pro_edit").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/edit_qty",
            type: "post",
            data: {
                rowid: rowid,
                id: id,
                qty: qty
            },
            success: function() {
                location.href = "<?= base_url(); ?>cart"
            }
        })
    })
</script>