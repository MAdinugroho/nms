<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Tambah Akun Tacac</h1>
	</div>

	<div class="row justify-content-md-center">
	<div class="col-10">
			<div class="hero bg-<?php echo $webconf->main_color; ?> text-white">
				<div class="row">
					<div class="col-6">
						<div class="hero-inner">
							<h2>Welcome Back, Ujang!</h2>
							<p class="lead">Berisi Informasi Akun Admin dan operator yang terdaftar di SIMAJAR</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10 ml-auto mr-auto">
			<div class="card">
				<div class="card-header">
					<h4>Input Text</h4>
				</div>
				<div class="card-body">
					<form role="form" method="post">
						<div class="pl-lg-4">
						<div class="row">
							<div class="form-group col-6">
								<label>Username</label>
								<input type="text" class="form-control" placeholder="Masukan username" name="username">
							</div>
							<div class="form-group col-6">
								<label>Nama</label>
								<input type="text" class="form-control" placeholder="Masukan username" name="name">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-6">
								<label>Email</label>
								<input type="text" class="form-control" placeholder="Masukan username" name="email">
							</div>
							<div class="form-group col-6">
								<label>Nama Active Directory</label>
								<input type="text" class="form-control" placeholder="Masukan password" readonly="readonly" name="adname" value="<?php echo $gen; ?>">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-6">
								<label>Password</label>
								<input type="text" class="form-control" placeholder="Masukan password" name="password" required>
							</div>
							<div class="form-group col-6">
								<label>Group</label>
								<input type="text" class="form-control" name="group" readonly="readonly" value="<?php echo $group; ?>">
							</div>
						</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-lg btn-primary" name="createAccountTacac" value="createAccountTacac">Tambah Account</button>
								<a href="<?php echo base_url('accountTacac'); ?>" class="btn btn-lg btn-warning ">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>