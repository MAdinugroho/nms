<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>List Akun Tacac</h1>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="hero bg-<?php echo $webconf->main_color; ?> text-white">
				<div class="row">
					<div class="col-6">
						<div class="hero-inner">
							<h2>Welcome Back, Ujang!</h2>
							<p class="lead">Berisi Informasi Akun Admin dan operator yang terdaftar di SIMAJAR</p>
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-12 text-right">
								<a href="#" class="btn btn-outline-white btn-lg btn-icon btn-right icon-left"
									data-toggle="modal" data-target="#addAccountTacac"><i class="far fa-user"></i>
									Tambah Akun</a>
									<a href="<?php echo base_url('exportXml'); ?>" class="btn btn-outline-white btn-lg btn-icon btn-right icon-left"><i class="far fa-user"></i>Update Active Directory</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-12">
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-pills" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin" role="tab"
								aria-controls="home" aria-selected="true">Admin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#op" role="tab"
								aria-controls="profile" aria-selected="false">Operator</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
							<div class="row">
								<?php foreach ($account_tacac as $item) : if ($item->group != 'admin_tacacs') {
										continue;
									} ?>
								<div class="col-sm-6 col-lg-3">
									<div class="card card-<?php echo $webconf->main_color; ?>">
										<div class="card-header">
											<h4 class="mb-1 fw-bold"><?php echo $item->name; ?></h4>
										</div>
										<div class="card-body">
											<h6 class="text-muted mb-2">@<?php echo $item->username; ?></p>
											<a href="<?php echo base_url('detailAccountTacac/'.$item->id) ?>"
												class="btn btn-<?php echo $webconf->main_color; ?> btn-round">Detail
												Akun</a>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="tab-pane fade" id="op" role="tabpanel" aria-labelledby="op-tab">
							<div class="row">
								<?php foreach ($account_tacac as $item) : if ($item->group != 'op_tacacs') {
										continue;
									} ?>
								<div class="col-sm-6 col-lg-3"">
									<div class=" card card-<?php echo $webconf->main_color; ?>">
									<div class="card-header">
										<h4 class="mb-1 fw-bold"><?php echo $item->name; ?></h4>
									</div>
									<div class="card-body">
										<h6 class="text-muted mb-2">@<?php echo $item->username; ?></p>
										<a href="<?php echo base_url('detailAccountTacac/'.$item->id) ?>"
												class="btn btn-<?php echo $webconf->main_color; ?> btn-round">Detail
												Akun</a>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<div id="addAccountTacac" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<form method="post">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Kriteria</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
					<div class="form-group col-6 col-md-12">
						<label>role</label>
						<select class="form-control form-control" placeholder="Masukan Nilai" name="group">
							<option value="admin_tacacs">admin</option>
							<option value="op_tacacs">operator</option>
						</select>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary " name="checkgroup" value="checkgroup">Lanjutkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- <div class="modal fade" id="addAccountTacac" role="dialog">
	<div class="modal-dialog">
		Modal content
		<div class="modal-content">
			<div class="modal-header">
				<center>
					<h4>Tambah Akun</h4>
				</center>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-6 col-md-12">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Masukan username" name="username" required>
					</div>
					<div class="form-group col-6 col-md-12">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukan password" name="name" required>
					</div>
					<div class="form-group col-6 col-md-12">
						<label>Password</label>
						<input type="text" class="form-control" placeholder="Masukan password" name="password" required>
					</div>
					<div class="form-group col-6 col-md-12">
						<label>role</label>
						<select class="form-control form-control" placeholder="Masukan Nilai" name="role">
							<option value="admin">admin</option>
							<option value="operator">operator</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="addAccountTacac"
							value="addAccountTacac">Tambah Analist</button>
						<button type="button" class="btn btn-grey" data-dismiss="modal">Kembali</button>
					</div>
			</form>
		</div>
	</div>
</div> -->