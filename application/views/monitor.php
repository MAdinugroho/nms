<!-- Main Content -->
<section class="section">
	<div class="row">
		<div class="col-12 col-sm-6 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-1 fw-bold">Monitoring</h3>
				</div>
				<div class="card-body">
					<ul class="nav nav-pills" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#monitor1" role="tab"
								aria-controls="home" aria-selected="true">Monitor 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#monitor2" role="tab"
								aria-controls="profile" aria-selected="false">Monitor 2</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="monitor1" role="tabpanel"
							aria-labelledby="admin-tab">
							<div class="row">
								<div class="col-12">
									<iframe
										src="http://10.42.12.180:5601/app/kibana#/dashboard/5a7f5de0-d06d-11e9-b261-c141a9011dcd?embed=true&_g=(refreshInterval%3A(pause%3A!t%2Cvalue%3A0)%2Ctime%3A(from%3Anow-7d%2Cto%3Anow))&_a=(fullScreenMode:!t)"
										frameborder="0" scrolling="no" height="1300" width="100%"></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="monitor2" role="tabpanel" aria-labelledby="op-tab">
							<div class="row">
								<div class="col-12">
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
													<td>
														<div class="badge badge-<?php if($item->status == 'Login'){echo'primary';}
									elseif($item->status == 'Logout'){echo'warning';}
									elseif($item->status == 'Update Profile'||$item->status == 'Reset Password'){echo'info';}
									elseif($item->status == 'Create admin'||$item->status == 'Create user'||$item->status == 'Create user'){echo'success';}
									elseif($item->status == 'Delete admin'||$item->status == 'Delete admin_tacacs'){echo'danger';}?>">
															<?php echo $item->status; ?></div>
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
				</div>
			</div>
		</div>
</section>
