<?php $this->layout('layout', ['title' => 'Liste des Photos' , 'user' => $user]) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des jardins à partager</h2>
	<p>Retrouvez l'ensemble des détails ci-dessous et contactez le propriétaire</p>


	<div class="row">

		<?php foreach($allGardens as $Pic) : ?>



		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <?= '<img src="' .
		      $this->assetUrl('uploads/' . $Pic['URL']) ?>" alt="<?= $Pic['ALT'] ?>">
		      <div class="caption">
		        <h3><?= $Pic['City'] ?></h3>

		        <p><?= $Pic['Name'] ?></p>
		        <p><?= $Pic['Description'] ?></p>
		        <p><a href="<?= $this->url('default_contact', ['id' => $Pic['gardenId']]) ?>" class="btn btn-primary" role="button">Contacter</a> <a href="<?= $this->url('garden_details', ['id' => $Pic['gardenId']]) ?>" class="btn btn-default" role="button">Détails...</a>
		        </p>

		      
		      


		      </div>
		    </div>
		  </div>

		<?php endforeach ?>

</div>

<?php $this->stop('main_content') ?>
