<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Dashboard</h1>
	</div>
	<div class="row">
		<div class="col-lg-3 ">
			<div class="card card-statistic-1">
				<div class="card-icon bg-primary">
					<i class="far fa-user"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Admin Terdaftar</h4>
					</div>
					<div class="card-body">
						10
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="far fa-newspaper"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Operator Terdaftar</h4>
					</div>
					<div class="card-body">
						42
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="far fa-file"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Reports</h4>
					</div>
					<div class="card-body">
						1,201
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-circle"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Online Users</h4>
					</div>
					<div class="card-body">
						47
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-lg-6">
			<div class="card card-danger">
				<div class="card-header">
					<h4>Users Tacac</h4>
					<div class="card-header-action">
						<a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
				<div class="card-body">
					<div class="owl-carousel owl-theme" id="users-carousel">
					<?php foreach ($account_tacac as $item): ?>
						<div>
							<div class="user-item">
								<!-- <img alt="image" src="<?= base_url('assets'); ?>/stisla/dist/assets/img/avatar/avatar-1.png"  class="img-fluid"> -->
								<div class="user-details">
									<div class="user-name"><?php echo $item->name; ?></div>
									<div class="text-job text-muted"><?php echo $item->group; ?></div>
									<div class="user-cta">
									<a href="<?php echo base_url('detailAccountTacac/'.$item->id) ?>"
												class="btn btn-<?php echo $webconf->main_color; ?> btn-round">Detail
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