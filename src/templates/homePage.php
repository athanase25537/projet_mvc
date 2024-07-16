<?php
$title = 'Home';
ob_start();
?>
<section class="banner d-flex justify-content-center align-items-center pt-5">
	<div class="container my-5 py-5">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<h1 class="text-capitalise py-3 redressed banner-desc">Bienvenue <?= $_SESSION['username'] ?>
				<p>
					<a href="index.php?action=add" class="btn btn-outline-info rounded-0 merriweather">Add Content</a>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="available merriweather py-5" id="marks">
    <div class="container">
        <div class="row">
			<h3 class="text-center text-dark merriweather m-5">Mes Notes</h3>
			<table class="table table-striped">
				<?php if(!empty($marks)): ?>
					<thead>
						<tr>
							<td>Nom et premons</td>
							<td>Numero</td>
							<td>Filiere</td>
							<td>Matiere</td>
							<td>Note</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($marks as $mark): ?>
							<tr>
								<td><?= $user['name']. ' ' .$user['firstname'] ?></td>
								<td><?= $user['number_user'] ?></td>
								<td><?= strtoupper($user['filiere']) ?></td>
								<td><?= $mark['matiere'] ?></td>
								<td><?= $mark['mark'] ?></td>
							</tr>
						<?php endforeach ?>
					<?php else: ?>
						<div class="alert alert-warning"><?= $user['name']. ' '. $user['firstname'] ?> n'a pas encore des notes</div>
					<?php endif ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>