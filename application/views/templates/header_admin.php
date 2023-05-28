<?php
$setting = $this->db->get('settings')->row_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit=no>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo/<?= $setting['favicon']; ?>" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" media="screen" type="text/css" href="<?= base_url(); ?>assets/css/colorpicker.css" />

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .ck-editor__editable_inline {
            min-height: 300px;
        }

        .description-product-detail {
            color: #666;
        }

        .description-product-detail h2 {
            font-size: 22px;
        }

        .description-product-detail h3 {
            font-size: 19px;
        }

        .description-product-detail h4 {
            font-size: 17px;
        }

        .description-product-detail p {
            font-size: 14.5px;
        }

        .description-product-detail img {
            width: 50%;
        }

        .status-expired {
            padding: 2px 4px;
            background: #f00;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-pending {
            padding: 2px 4px;
            background: #e9b10a;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-settlement {
            padding: 2px 4px;
            background: #8de02c;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-cancel {
            padding: 2px 4px;
            background: #F5F5DC;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-failure {
            padding: 2px 4px;
            background: #8B0000;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="page-top">
    <?php
    $setting = $this->db->get('settings')->row_array();
    $dateNow = date('Y-m-d H:i');
    $dateDB = $setting['promo_time'];
    $dateDBNew = str_replace("T", " ", $dateDB);
    if ($dateNow >= $dateDBNew) {
        $this->db->set('promo', 0);
        $this->db->update('settings');
    }
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>administrator">
                <div class="sidebar-brand-icon rotate">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/categories">
                    <i class="fas fa-fw fa-tag"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/products">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/supplier">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Supplier</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-fire"></i>
                    <span>Fotografi</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/paket">
                            <i class="fas fa-fw fa-box-open"></i>
                            <span>Paket</span>
                        </a>
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/fotografer">
                            <i class="fas fa-fw fa-camera"></i>
                            <span>Fotografer</span>
                        </a>
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/jadwal">
                            <i class="fas fa-fw fa-calendar"></i>
                            <span>Jadwal</span>
                        </a>
                        <!-- <a class="collapse-item" href="<?= base_url(); ?>administrator/lokasi">
                            <i class="fas fa-fw fa-calendar"></i>
                            <span>Lokasi Foto</span>
                        </a> -->
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-fire"></i>
                    <span>Promo</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/promo">
                            <i class="fas fa-fw fa-fire"></i>
                            <span>Promo Produk</span>
                        </a>
                        <!-- <a class="collapse-item" href="<?= base_url(); ?>administrator/promo_paket">
                            <i class="fas fa-fw fa-fire"></i>
                            <span>Promo Paket</span>
                        </a> -->
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/users">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pelanggan</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block" />

            <?php $this->db->where('status', 0);
            $this->db->or_where('status', 1);
            $orders = $this->db->get('invoice'); ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/orders">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pesanan</span> <small class="badge badge-warning"><?= $orders->num_rows() ?> new</small></a>
            </li>

            <?php $this->db->where('status', 0);
            $this->db->or_where('status', 1);
            $orders = $this->db->get('invoice'); ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/orders_paket">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pesanan Paket</span></small></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/pembelian">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Pembelian</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/pengeluaran">
                    <i class="fas fa-fw fa-fire"></i>
                    <span>Pengeluaran Lain-Lain</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/lap_penjualan">
                            <i class="fas fa-fw fa-file"></i>
                            <span>Laporan Penjualan</span>
                        </a>
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/lap_pemesanan">
                            <i class="fas fa-fw fa-file"></i>
                            <span>Laporan Pemesanan</span>
                        </a>
                        <a class="collapse-item" href="<?= base_url(); ?>administrator/lap_pembelian">
                            <i class="fas fa-fw fa-file"></i>
                            <span>Laporan Pembelian</span>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/email">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Kirim Email</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/testimonials">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Testimoni</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/pages">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Halaman</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block" />

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>administrator/settings">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan</span></a>
            </li>
            <br />

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login sebagai Admin</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url(); ?>administrator/edit">
                                    <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profil
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->