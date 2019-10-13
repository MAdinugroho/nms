<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $webconf->slogan; ?></title>
    <link rel="shortcut icon" href="https://getstisla.com/landing/stisla.png">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/prism/prism.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://getstisla.com/dist/css/style.css">
    <link rel="stylesheet" href="https://getstisla.com/dist/css/custom.css">
	<link rel="stylesheet" href="https://getstisla.com/landing/style.css"> -->

	<link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla-front/dist/style.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla-front/dist/custom.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla-front/dist/landing.css">
</head>

<body class="">


    <nav class="navbar navbar-reverse navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand smooth" href="<?= base_url('/'); ?>"><?php echo $webconf->office_name; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-lg-center d-none d-lg-block">
                    <li class="ml-lg-3 nav-item">
                        <a href="<?= base_url('login'); ?>" class="btn btn-round smooth btn-icon icon-left">
                            <i class="fas fa-lock"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="hero-wrapper" id="top"> 
        <div class="hero">
            <div class="container">
                <div class="text text-center text-lg-left">
                    <h1><?php echo $webconf->slogan; ?></h1>
                    <p class="lead">
                    <?php echo $webconf->description; ?>
                    </p>
                </div>
                <div class="image d-none d-lg-block">
                    <img src="<?= base_url('assets'); ?>/stisla-front/ill.svg" alt="img">
                </div>
            </div>
        </div>
    </div>
    <div class="callout container">
        <div class="row">
            <div class="col-md-6 col-12 mb-4 mb-lg-0">
                <div class="text-job text-muted text-14">Sesi Terahir Diakses Oleh</div>
                <div class="h3 mb-0 font-weight-bold"><?php echo $webconf->lastaccess; ?></div>
                <div class="h4 mb-0 font-weight-bold">Pada <?php echo $webconf->timeaccess; ?></div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="h2 font-weight-bold"><?php echo $record_user->jumlah_user; ?></div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">User Terdaftar</div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="h2 font-weight-bold"><?php echo $record_optacacs->jumlah_optacac; ?></div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Operator Terdaftar</div>
            </div>
        </div>
    </div>
    <section id="features">
            <div class="container">
            <!-- <div class="row">
                <div class="col-md-6">
                <img src="<?= base_url('assets'); ?>/img/undip.png" width="45" class="img-rounded float: left;" alt="...">
                    <h3 class="text-capitalize">BAPSI UNDIP</h3>
                    <div class="pr-lg-2">
                        <p>Biro Administrasi Perencanaan dan Sistem Informasi</p>
                        <p>Alamat: <?php echo $webconf->office_address; ?></p>
                        <p>Telpon: <?php echo $webconf->office_phone_number; ?></p>
                        <p>Email: <?php echo $webconf->office_phone_number; ?></p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>


    <script>var csrf_token = 'wmtPJTk0RSfdNAnKKTqVu4224Ke9qbmAEUxr0Qnp';</script>
    
    <!-- <script src="<?= base_url('assets'); ?>/stisla/dist/modules/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/stisla/dist/modules/popper.js"></script>
    <script src="<?= base_url('assets'); ?>/stisla/dist/modules/tooltip.js"></script>
    <script src="<?= base_url('assets'); ?>/stisla/dist/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/stisla/dist/modules/prism/prism.js"></script>
    <script src="<?= base_url('assets'); ?>/stisla/dist/js/stisla.js"></script>
    <script src="https://getstisla.com/landing/script.js"></script> -->

    
    <!--End mc_embed_signup-->

    </body>
</html>
