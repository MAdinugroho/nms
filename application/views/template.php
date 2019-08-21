<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/stisla/dist/assets/css/components.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg bg-<?php echo $webconf->main_color;?>"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets'); ?>/stisla/dist/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $this->session->userdata['name']; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('logout'); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
	  </nav>
	  <?php
		//var_dump($this->session->userdata['previlleges']);die;
			$this->load->view('menu');

		?>
      

      <!-- Main Content -->
      <div class="main-content">
	  <?php $this->load->view($view_name); ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="">Muhamad Adinugroho</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/popper.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/tooltip.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/bootstrap-notify/bootstrap-notify.min.js"></script>
  <script src="<?= base_url('assets'); ?>/stisla/dist/assets/modules/sweetalert/sweetalert.min.js"></script>
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