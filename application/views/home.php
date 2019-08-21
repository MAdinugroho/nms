<!DOCTYPE html>
<html lang="en">
<head>
    <title>Free Bootstrap Admin Template &mdash; Stisla</title>
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
                <ul class="navbar-nav mr-auto ml-lg-3 align-items-lg-center">
                    <li class="nav-item"><a href="https://getstisla.com/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="https://getstisla.com/support" class="nav-link">Support</a></li>
                    <li class="nav-item"><a href="https://getstisla.com/page/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item d-lg-none d-md-block"><a href="https://getstisla.com/download" class="nav-link smooth" target="_blank">Download</a></li>
                </ul>
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
                <div class="text-job text-muted text-14">not a reason to use Stisla</div>
                <div class="h1 mb-0 font-weight-bold"><span class="font-weight-500">just a </span>statistic</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">7000+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Downloads</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">125+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Countries</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">6500+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Sessions</div>
            </div>
        </div>
    </div>
    <section id="features">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Stisla is <span class="text-primary">designed for you</span> and your clients</h2>
                    <p class="lead">Integrated with 30+ third-party libraries and has many components, you will easily to create a dashboard layout.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Responsive Design</h5>
                            <p>Don't worry about the gadget you have. Stisla is very suitable for every platform.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fab fa-html5"></i>
                            </div>
                            <h5>HTML5 &amp; CSS3</h5>
                            <p>Written with HTML5 and CSS3 and supported by most modern browsers.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5>JavaScript APIs</h5>
                            <p>We provide some javascript APIs to interact with some components more easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-capitalize">Stisla</h3>
                    <div class="pr-lg-5">
                        <p>Stisla was created by <a href="https://twitter.com/mhdnauvalazhar">Muhamad Nauval Azhar</a> to help developers create their own UI designs for the dashboard. Stisla is free for anyone, support us by becoming a sponsor and keeping this project alive.</p>
                        <p>&copy; Stisla. With <i class="fas fa-heart text-danger"></i> from Indonesia</p>
                        <div class="mt-4 social-links">
                            <a href="https://github.com/stisla"><i class="fab fa-github"></i></a>
                            <a href="https://twitter.com/getstisla"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
