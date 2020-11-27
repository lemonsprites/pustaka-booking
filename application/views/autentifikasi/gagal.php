<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gagal Aktifasi Akun </title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">
                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <?= $this->session->flashdata('pesan'); ?>
                        <a href="<?= base_url('autentifikasi'); ?>" class="btn btn-secondary ">&larr; Close </a>
                    </div>
                </div>
                <!-- /.contai n er-fluid -->
            </div>
            <!--End of Main Content -->
        </div>
        <!--End of Content Wrapper -->
    </div>
    <!--End of Page Wrap per -->
    <!--Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');
?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
?>"></script>
    <!-- Core plugin JavaScript -->
    <script src="<?= base_url('assets/>vendor/jqueryeasing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin2.min.js'); ?>"></script>
    <script>
    $('.alert-message').alert().delay(3500).slideUp('slow');
    </script>
</body>

</html>