<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Konfigurasi Website</h1>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="hero bg-<?php echo $webconf->main_color; ?> text-white">
				<div class="hero-inner">
				<h2>Welcome Back, <?php echo $this->session->userdata['name']; ?>!</h2>
				<p class="lead">Berisi Informasi data configurasi dashboard <?php echo $webconf->office_name; ?></p>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 col-lg-12">
			<div class="card">
				<div class="card-body">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informasi Web</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Konfigurasi Warna</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<form method="post">

								<div class="card-body">
									<div class="row">

										<div class="form-group col-6 col-md-6">
											<label>Nama Situs Web</label>
											<input type="text" class="form-control" placeholder="Masukan nama web anda" name="office_name" value="<?php echo $webconf->office_name; ?>">
										</div>

										<div class="form-group col-6 col-md-6">
											<label>Nomor Telepon</label>
											<input type="text" class="form-control" placeholder="Masukan telepon anda" name="office_phone_number" value="<?php echo $webconf->office_phone_number; ?>">
										</div>

										<div class="form-group col-6 col-md-6">
											<label>Slogan</label>
											<input type="text" class="form-control" placeholder="Masukan Slogan" name="slogan" value="<?php echo $webconf->slogan; ?>">
										</div>

										<div class="form-group col-6 col-md-6">
											<label>Deskripsi</label>
											<input type="text" class="form-control" placeholder="Masukan Dekripsi" name="description" value="<?php echo $webconf->description; ?>">
										</div>

										<div class="form-group col-6 col-md-12">
											<label>Alamat Kantor</label>
											<input type="text" class="form-control" placeholder="Masukan alamat" name="office_address" value="<?php echo $webconf->office_address; ?>">
										</div>

									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-lg btn-info" name="updateInfo" value="updateInfo">Update Data</button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<form method="post">
								<div class="card-body">
									<div class="section-title mt-0">Main Color</div>
									<div class="form-group">
										<label>Default Select</label>
										<select class="form-control" name="main_color">
											<option value="primary">Primary</option>
											<option value="info">Info</option>
											<option value="warning">Warning</option>
										</select>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-lg btn-info" name="updateColor" value="updateColor">Update Data</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>