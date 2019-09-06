<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<img src="<?= base_url('assets'); ?>/img/undip.png" width="35" class="img-rounded mx-auto" alt="...">
			<a href="index.html"><?php echo $webconf->office_name; ?></a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="index.html">St</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php if($view_name=='user/dashboard'){echo 'active';}?>">
				<a href="<?php echo base_url('dashboardUser'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
			</li>
			<li class="<?php if($view_name=='user/monitoring'){echo 'active';}?>">
				<a href="<?php echo base_url('monitorUser'); ?>" class="nav-link"><i class="fas fa-chart-bar"></i><span>Monitoring</span></a>
			</li>

		</ul>
	</aside>
</div>