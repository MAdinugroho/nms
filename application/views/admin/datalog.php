<!-- Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Data Log <?php echo $webconf->office_name; ?></h1>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="datalog">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th>User</th>
									<th>Waktu</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							<?php $i = 1;
									foreach ($datalog as $item) : ?>
										<tr id="<?php echo $item->id; ?>">
									<td><?php echo $i; ?></td>
									<td><?php echo $item->name; ?></td>
									<td><?php echo $item->time; ?></td>
									<td><div class="badge badge-<?php if($item->status == 'Login'){echo'primary';}
									elseif($item->status == 'Logout'){echo'warning';}
									elseif($item->status == 'Update Profile'||$item->status == 'Reset Password'){echo'info';}
									elseif($item->status == 'Create admin'||$item->status == 'Create user'||$item->status == 'Create user'){echo'success';}
									elseif($item->status == 'Delete admin'||$item->status == 'Delete admin_tacacs'){echo'danger';}?>"><?php echo $item->status; ?></div>
									</td>
								</tr>
								<?php $i++;
									endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>