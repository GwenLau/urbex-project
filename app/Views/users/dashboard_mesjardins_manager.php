<?php $this->layout('layout', ['title' => 'Gérer ses jardins', 'user' => $user]) ?>

<?php $this->start('main_content') ?>
	
		<input type="hidden" id="gardenDeleteRoute" value="<?= $this->url('garden_delete') ?>">
		<div class="container">
			<div class="row profile">
				<div class="col-md-3">
					<?= $this->insert('users/sidebar_dashboard', ['user' => $user]) ?>
				</div>

					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<table class="table" width="100%">
									<thead>
										<tr>
											<th>
												Nom
											</th>
											<th>
												Ville
											</th>
					   
										</tr>
									</thead>
									<tbody>

									<?php foreach($gardens as $garden) : ?>
										<tr id="garden-<?= $garden['id'] ?>">
											<td>
												<strong><?= $garden['Name'] ?></strong>
											</td>
											<td>
												<?= $garden['City'] ?>
											</td>
											<td>
												<button type="button" class="update-garden btn btn-secondary btn-sm" data-id="<?= $garden['id'] ?>" name="update-garden">Modifier</button>
												<button type="button" class="delete-garden btn btn-danger btn-sm" data-id="<?= $garden['id'] ?>" name="delete-garden">X</button>
											</td>
										</tr>
									<?php endforeach ?>
									
									</tbody>
								</table>
								<div class="garden-deleted hidden bg-danger">Le jardin a été supprimé.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<?php $this->stop('main_content') ?>




