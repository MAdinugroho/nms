<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="index.html"><?php echo $webconf->office_name; ?></a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="index.html">St</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="<?php if($view_name=='admin/dashboard'){echo 'active';}?>">
				<a href="<?php echo base_url('dashboardAdmin'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
			</li>
			<li class="<?php if($view_name=='admin/monitor'){echo 'active';}?>">
				<a href="<?php echo base_url('monitor'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Monitor</span></a>
			</li>
			<li class="<?php if($view_name=='admin/datalog'){echo 'active';}?>">
				<a href="<?php echo base_url('dataLog'); ?>" class="nav-link"><i class="fas fa-home"></i><span>Log Sistem</span></a>
			</li>
			<li class="menu-header">Configurasi</li>
			<li class="<?php if($view_name=='admin/account'){echo 'active';}?>">
				<a href="<?php echo base_url('account'); ?>" class="nav-link"><i class="fas fa-cogs"></i><span>Akun</span></a>
			</li>
			<li class="<?php if($view_name=='admin/account_tacac'){echo 'active';}?>">
				<a href="<?php echo base_url('accountTacac'); ?>" class="nav-link"><i class="fas fa-users"></i><span>Akun Tacac</span></a>
			</li>
			<li class="<?php if($view_name=='webconf'){echo 'active';}?>">
				<a href="<?php echo base_url('webconf'); ?>" class="nav-link"><i class="fas fa-cogs"></i><span>Konfigurasi Sistem</span></a>
			</li>
		</ul>
	</aside>
</div>