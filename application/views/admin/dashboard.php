<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Dashboard</h1>
	</div>
	<div class="row">
		<div class="col-lg-3 ">
			<div class="card card-statistic-1">
				<div class="card-icon bg-primary">
					<i class="fas fa-user-cog"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Admin Terdaftar</h4>
					</div>
					<div class="card-body">
						<?php echo $record_admin->jumlah_admin; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="fas fa-user"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>User Terdaftar</h4>
					</div>
					<div class="card-body">
						<?php echo $record_user->jumlah_user; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="fas fa-users-cog"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Admin Tacacs Terdaftar</h4>
					</div>
					<div class="card-body">
						<?php echo $record_admintacacs->jumlah_admintacac; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-users"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>OP Tacacs Terdaftar</h4>
					</div>
					<div class="card-body">
						<?php echo $record_optacacs->jumlah_optacac; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">
					<h4>User Port Access</h4>
				</div>
				<div class="card-body">
					<iframe src="http://10.42.12.180:5601/app/kibana#/dashboard/a38c8d10-d071-11e9-b261-c141a9011dcd?embed=true&_g=(refreshInterval%3A(pause%3A!t%2Cvalue%3A0)%2Ctime%3A(from%3Anow-7d%2Cto%3Anow))&_a=(fullScreenMode:!t)" frameborder="0" scrolling="no" height="500" width="100%"></iframe>
				</div>
			</div>
		</div>

		<div class="col-6">
			<div class="card card-danger">
				<div class="card-header">
					<h4>Users Tacac</h4>
					<div class="card-header-action">
						<a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="users-carousel">
						<?php foreach ($account_tacac as $item) : ?>
							<div>
								<div class="user-item">
									<!-- <img alt="image" src="<?= base_url('assets'); ?>/stisla/dist/assets/img/avatar/avatar-1.png"  class="img-fluid"> -->
									<div class="user-details">
										<div class="user-name"><?php echo $item->name; ?></div>
										<div class="text-job text-muted"><?php echo $item->group; ?></div>
										<div class="user-cta">
											<a href="<?php echo base_url('detailAccountTacac/' . $item->id) ?>" class="btn btn-<?php echo $webconf->main_color; ?> btn-round">Detail
												Akun</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<div class="card card-danger">
				<div class="card-header">
					<h4>Users Dashboard</h4>
					<div class="card-header-action">
						<a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="users-carousel2">
						<?php foreach ($account as $item) : ?>
							<div>
								<div class="user-item">
									<img alt="image" src="<?= base_url('assets'); ?>/stisla/dist/assets/img/avatar/avatar-1.png"  class="img-fluid">
									<div class="user-details">
										<div class="user-name"><?php echo $item->name; ?></div>
										<div class="text-job text-muted"><?php echo $item->level; ?></div>
										<div class="user-cta">
											<a href="<?php echo base_url('detailAccount/' . $item->id) ?>" class="btn btn-<?php echo $webconf->main_color; ?> btn-round">Detail
												Akun</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>