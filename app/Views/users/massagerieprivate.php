<?php $this->layout('layout', ['title' => 'Dashboard']) ?>

<?php $this->start('main_content') ?>
	<h2>Gérer vos demandes de reservations de jardins</h2>
	<!-- <p>Retrouvez l'ensemble des détails de votre profil et gérer vos jardins à partager</p> -->
	
			<div class="container">
		    <div class="row profile">
				<div class="col-md-3">
					<?= $this->insert('users/sidebardashboard', ['user' => $user]) ?>
				</div>
				<div class="col-md-9">
		            <div class="profile-content">
					   
							Ma messagerie interne ...

				

		            </div>

				</div>
			</div>
		</div>
		<center>
		</center>
		<br>
		<br>

<?php $this->stop('main_content') ?>
