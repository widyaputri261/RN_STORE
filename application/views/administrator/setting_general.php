<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid mb-4">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Pengaturan</h1>

    <div class="row">
        <div class="col-lg-3">
            <div class="card shadow">
                <div class="card-body">
                    <?php include('menu-setting.php'); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="card-body">
                    <p class="lead">Logo</p>
                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo'] ?>" alt="logo" width="40%">
                    <form action="<?= base_url(); ?>administrator/setting_change_logo" method="post" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                            <input type="file" name="logo" id="logo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-sm- btn-success">Ganti Logo</button>
                    </form>
                    <hr>
                    <p class="lead">Favicon</p>
                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['favicon'] ?>" alt="favicon" width="70px">
                    <form action="<?= base_url(); ?>administrator/setting_change_favicon" method="post" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                            <input type="file" name="logo" id="logo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-sm- btn-success">Ganti Favicon</button>
                    </form>
                    <div class="col-md-9">
                    </div>
                </div>
            </div>
            <div class="card shadow mt-3">
                <div class="card-header">
                    <h2 class="lead text-dark mb-0">Umum</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>administrator/setting/general" method="post">
                        <div class="form-group">
                            <label for="title">Nama Website</label>
                            <input type="text" name="title" id="title" class="form-control" autocomplete="off" value="<?= $general['app_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="slogan">Slogan Website</label>
                            <input type="text" name="slogan" id="slogan" class="form-control" autocomplete="off" value="<?= $general['slogan']; ?>" required>
                            <small class="text-muted">Akan muncul pada title home</small>
                        </div>
                        <div class="form-group">
                            <label for="color">Warna Navigasi</label>
                            <input type="text" name="color" id="color" class="form-control" autocomplete="off" value="<?= $general['navbar_color']; ?>" required>
                            <small class="text-muted">Gunakan kode heksa. Contoh: #12283F</small>
                        </div>
                        <div class="form-group">
                            <label for="rajaongkir">API Rajaongkir</label>
                            <input type="text" name="rajaongkir" id="rajaongkir" class="form-control" autocomplete="off" value="<?= $general['api_rajaongkir']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="smtp_host">SMTP Host</label>
                            <input type="text" name="smtp_host" id="smtp_host" class="form-control" autocomplete="off" value="<?= $general['host_mail']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="smtp_port">SMTP Port</label>
                            <input type="text" name="smtp_port" id="smtp_port" class="form-control" autocomplete="off" value="<?= $general['port_mail']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="crypto_smtp">Crypto Mail</label>
                            <input type="text" name="crypto_smtp" id="crypto_smtp" class="form-control" autocomplete="off" value="<?= $general['crypto_smtp']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="account_gmail">Akun Mail</label>
                            <input type="email" name="account_gmail" id="account_gmail" class="form-control" autocomplete="off" value="<?= $general['account_gmail']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pass_gmail">Password Mail</label>
                            <input type="password" name="pass_gmail" id="pass_gmail" class="form-control" autocomplete="off" value="<?= $general['pass_gmail']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp</label>
                            <input type="number" name="whatsapp" id="whatsapp" class="form-control" autocomplete="off" value="<?= $general['whatsapp']; ?>" required>
                            <small class="text-muted">Format angka 08xx. Contoh: 085603002867</small>
                        </div>
                        <div class="form-group">
                            <label for="whatsappv2">WhatsApp V2</label>
                            <input type="number" name="whatsappv2" id="whatsappv2" class="form-control" autocomplete="off" value="<?= $general['whatsappv2']; ?>" required>
                            <small class="text-muted">Format angka 628xx. Contoh: 6285603002867</small>
                        </div>
                        <div class="form-group">
                            <label for="email_contact">Email Kontak</label>
                            <input type="text" name="email_contact" id="email_contact" class="form-control" autocomplete="off" value="<?= $general['email_contact']; ?>" required>
                            <small class="text-muted">Muncul pada footer. Setiap orderan masuk akan dikirim ke email tersebut</small>
                        </div>
                        <div class="form-group">
                            <label for="client_api_midtrans">Client Key Midtrans</label>
                            <input type="text" name="client_api_midtrans" id="client_api_midtrans" class="form-control" autocomplete="off" value="<?= $general['client_api_midtrans']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="server_api_midtrans">Server Key Midtrans</label>
                            <input type="text" name="server_api_midtrans" id="server_api_midtrans" class="form-control" autocomplete="off" value="<?= $general['server_api_midtrans']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.container-fluid -->