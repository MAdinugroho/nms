<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>List Akun Tacac</h1>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-8">
			<div class="card">
				<div class="card-header">
					<h4>Input Text</h4>
				</div>
				<div class="card-body">
					<form role="form" method="post">
						<div class="modal-body">
							<div class="form-group col-6 col-md-12">
								<label>Username</label>
								<input type="text" class="form-control" placeholder="Masukan username" name="username" >
							</div>
							<div class="form-group col-6 col-md-12">
								<label>Nama Group AD</label>
								<input type="text" class="form-control" placeholder="Masukan password" readonly="readonly" name="name"  value="<?php echo $gen; ?>">
							</div>
							<div class="form-group col-6 col-md-12">
								<label>Password</label>
								<input type="text" class="form-control" placeholder="Masukan password" name="password" required>
							</div>
							<div class="form-group col-6 col-md-12">
								<label>Group</label>
								<input type="text" class="form-control" name="group" readonly="readonly" value="<?php echo $group; ?>" >
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" name="createAccountTacac" value="createAccountTacac">Tambah Account</button>
								<button  type="submit" class="btn btn-warning " name="back" value="back">Kembali</button>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>