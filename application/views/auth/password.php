<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="col-md-12">
                                        <center>
                                            <img width="300" src="<?=base_url('assets/')?>images/brks.png"
                                                alt="login.png"> <br><br>
                                                <center>
                                            <h2 style="color: black;">SIMPRO</h2>
                                                <h4 style="color: black;">Sistem Informasi & Manajemen Proyek</h4>
                                                <h5 style="color: black;">TSI - Bank Riau Kepri Syariah</h5>
                                            </center>
                                    </div>
                                    <div class="text-center">
                                        <br>
                                        <b>
                                            <h1 class="h4 text-gray-900 mb-4">RESET PASSWORD</h1>
                                        </b>
                                    </div>
                                    <form method="post" action="<?= base_url('Password'); ?>">

                                        <div class="form-group">
                                            <input type="text" name="NIK" class="form-control"
                                                value="<?= set_value('NIK'); ?>" id="password1"
                                                placeholder="NIK">
                                            <?= form_error('NIK', '<small class="text-danger p1-3">', '</small>'); ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password1" class="form-control"
                                                value="<?= set_value('password'); ?>" id="password1"
                                                placeholder="New Password">
                                            <?= form_error('password1', '<small class="text-danger p1-3">', '</small>'); ?>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password2" class="form-control"
                                                value="<?= set_value('password'); ?>" id="password2"
                                                placeholder="Repeat New Password">
                                            <?= form_error('password2', '<small class="text-danger p1-3">', '</small>'); ?>

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset My Password
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('Auth') ?>">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>