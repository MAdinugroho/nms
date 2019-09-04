<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Detail Akun Tacac</h1>
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
								<div class="col-12 pl-lg-4">
									<div class="row">
										<div class="form-group col-6">
											<label>Username</label>
											<input type="text" class="form-control" placeholder="Masukan Username" id="username" name="username" value="<?php echo $account->username; ?>" disabled>
										</div>
										<div class="form-group col-6">
											<label>Nama</label>
											<input type="text" class="form-control" placeholder="Masukan Nama" id="name" name="name" value="<?php echo $account->name; ?>" disabled>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Masukan Email" id="email" name="email" value="<?php echo $account->email; ?>" disabled>
										</div>
										<div class="form-group col-6">
											<label>Dibuat Pada</label>
											<input type="text" class="form-control" name="datecreated" value="<?php echo $account->date_created; ?>" disabled>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<label>Password</label>
											<input type="text" class="form-control" placeholder="Masukan password" name="password" disabled>
										</div>
										<div class="form-group col-6">
											<label>Hak Akses</label>
											<input type="text" class="form-control" name="level" value="<?php echo $account->level; ?>" disabled>
										</div>
										<div class="form-group col-12">
											<label>Keterangan</label>
											<textarea class="form-control summernote-simple" id="desc" name="desc" value="" disabled><?php echo $account->desc; ?></textarea>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="op" role="tabpanel" aria-labelledby="op-tab">
							<div class="row">
								<form method="post">
									<div class="form-group col-12">
										<h6>Apakah anda yakin menghapus akun <?php echo $account->username; ?> ? untuk melanjutkan silahkan masukan password anda pada kolom dibawah ini</h6>
										<input type="password" name="password" class="form-control" placeholder="masukan password anda">
										<input type="text" name="id" value="<?php echo $account->id; ?>" hidden>
										<input type="text" name="level" value="<?php echo $account->level; ?>" hidden>
										<input type="text" name="status" value="<?php echo $account->status; ?>" hidden>
									</div>
									<div class="card-footer col-6">
										<button type="submit" class="btn btn-danger" name="deleteAccount" value="deleteAccount">Hapus Akun</button>
										<a href="<?php echo base_url('account'); ?>" class="btn btn-warning">Kembali</a>
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