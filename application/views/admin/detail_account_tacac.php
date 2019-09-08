<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Detail Akun Tacacs</h1>
	</div>

	<div class="row">
		<div class="col-8 col-sm-6 col-lg-8">
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-pills" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="home" aria-selected="true">Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#op" role="tab" aria-controls="profile" aria-selected="false">Opsi</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
							<form role="form" method="post">
								<div class="pl-lg-4">
									<div class="row">
										<div class="form-group col-6">
											<label>Username</label>
											<input type="text" class="form-control" placeholder="Masukan Username" id="username" name="username" value="<?php echo $accounttacac->username; ?>" disabled>
										</div>
										<div class="form-group col-6">
											<label>Nama</label>
											<input type="text" class="form-control" placeholder="Masukan Nama" id="name" name="name" value="<?php echo $accounttacac->name; ?>" disabled>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Masukan Email" id="email" name="email" value="<?php echo $accounttacac->email; ?>" disabled>
										</div>
										<div class="form-group col-6">
											<label>Group</label>
											<input type="text" class="form-control" name="group" value="<?php echo $accounttacac->group; ?>" disabled>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="op" role="tabpanel" aria-labelledby="op-tab">
						<div class="row">
							<form method="post">
							<div class="form-group col-12">
							<p>Apakah anda yakin menghapus akun <?php echo $accounttacac->username; ?> ? untuk melanjutkan silahkan masukan password anda pada kolom dibawah ini</p>
								<input type="password" name="password" class="form-control" placeholder="masukan password anda">
								<input type="text" name="id" value="<?php echo $accounttacac->id; ?>" hidden>
								<input type="text" name="username" value="<?php echo $accounttacac->username; ?>" hidden>
								<input type="text" name="username" value="<?php echo $accounttacac->group; ?>" hidden>
								<input type="text" name="status" value="<?php echo $accounttacac->status; ?>" hidden>
							</div>
							<div class="card-footer col-6">
                              <button type="submit" class="btn btn-danger" name="deleteAccountTacac" value="deleteAccount">Hapus Akun</button>
                              <a href="<?php echo base_url('accountTacac'); ?>" class="btn btn-warning" >Kembali</a>
							</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
