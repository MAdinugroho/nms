<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; <?php echo $webconf->slogan; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/css/components.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <h2><?php echo $webconf->office_name; ?></h2>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
                
              </div>
              
              <div class="card-body">
                <form method="post" action="<?= base_url('login'); ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" name="username" type="username" value="<?= set_value('username') ?>">
                    <?= form_error('username', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <label for="email">Password</label>
                    <div class="float-right">
                        <a href="<?php echo base_url('forgotPassword'); ?>" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    <input id="password" type="password" class="form-control" name="password">
                    <?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Siamajar 2019
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- General JS Scripts -->
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/popper.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/tooltip.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/moment.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script>
        var msg = '<?= $this->session->flashdata('msg') ?>';
        var type = '<?= $this->session->flashdata('type') ?>';
        if (msg.length !== 0) {
            swal('', msg, type);
        }
    </script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/js/scripts.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/js/custom.js"></script>
</body>

</html>