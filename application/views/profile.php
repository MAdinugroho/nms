<!-- Main Content -->
<section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title"><?php echo $detail->name; ?>!</h2>
            <p class="section-lead">
              Ubah Data Diri Anda Disini
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="<?= base_url('assets'); ?>/stisla/dist/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Terdaftar Sejak</div>
                        <div class="profile-widget-item-value"><?php echo $detail->date_created; ?></div>
					  </div>
					  <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Hak Akses</div>
                        <div class="profile-widget-item-value"><?php echo $detail->level; ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?php echo $detail->name; ?><div class="text-muted d-inline font-weight-normal"><div class="slash"></div><?php echo $detail->email; ?></div></div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-md-6 col-12">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Masukan Username" id="username" name="username" value="<?php echo $detail->username; ?>">
								<?= form_error('username', '<small class="text-danger" pl-3>', '</small>') ?>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" id="name" name="name" value="<?php echo $detail->name; ?>">
								<?= form_error('name', '<small class="text-danger" pl-3>', '</small>') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Masukan Email" id="email" name="email" value="<?php echo $detail->email; ?>">
								<?= form_error('email', '<small class="text-danger" pl-3>', '</small>') ?>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Masukan password" name="password">
								<?= form_error('password', '<small class="text-danger" pl-3>', '</small>') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Keterangan</label>
                            <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
					<button type="submit" name="updateProfile" value="updateProfile" class="btn btn-primary ">Simpan Data</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>