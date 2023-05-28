<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo/favicon.png" type="image/x-icon">

</head>
<style>
    .image-login {
        background: url('../assets/images/background/187161.jpg');
        background-position: center;
        background-size: cover;
    }
    .btn-login{
        background-color: #9933FF;
        color: white;
    }
</style>

<body class="bg-gradient-light image-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('failed'); ?>
                                    <form class="user" action="<?= base_url(); ?>login/admin" method="post">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" autocomplete="off" name="username" id="username" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" autocomplete="off" name="password" id="password" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="cookie" id="cookie">
                                                <label for="cookie" class="custom-control-label">Ingat Saya</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-login">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core Javascript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin Javascript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>