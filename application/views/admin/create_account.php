<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Tambah Akun</h1>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-md-10 ml-auto mr-auto">
			<div class="card">
				<div class="card-header">
					<h4>Input</h4>
				</div>
				<div class="card-body">
					<form role="form" method="post" action="<?= base_url('createAccount/' . $group); ?>">
						<div class="pl-lg-4">
							<div class="row">
								<div class="form-group col-6">
									<label>Username</label>
									<input type="text" class="form-control" placeholder="Masukan Username" id="username" name="username" value="<?= set_value('username') ?>">
									<?= form_error('username', '<small class="text-danger" pl-3>', '</small>') ?>
								</div>
								<div class="form-group col-6">
									<label>Nama</label>
									<input type="text" class="form-control" placeholder="Masukan Nama" id="name" name="name" value="<?= set_value('name') ?>">
									<?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
								</div>
								<div class="form-group col-6">
									<label>Email</label>
									<input type="text" class="form-control" placeholder="Masukan Email" id="email" name="email" value="<?= set_value('email') ?>">
									<?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
								</div>
								<div class="form-group col-6">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Masukan password" name="password">
									<?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
								</div>
								<div class="form-group col-6">
									<label>Role</label>
									<input type="text" class="form-control" name="level" readonly="readonly" value="<?php echo $group; ?>">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-12">
									<label>Keterangan</label>
									<textarea class="form-control summernote-simple" placeholder="Masukan Keterangan" id="desc" name="desc" value=""></textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-lg btn-primary">Tambah Account</button>
								<a href="<?php echo base_url('accountTacac'); ?>" class="btn btn-lg btn-warning ">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
