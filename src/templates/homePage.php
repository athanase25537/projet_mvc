<?php
$title = 'Home';
function getIdUser($marks, $numberUser): int {
	$i = 0;
	foreach($marks as $m) {
		if($m['number_user'] == $numberUser) {
			return $i;
		}
		$i++;
	}
}
ob_start();
?>
<section class="banner d-flex justify-content-center align-items-center pt-5">
	<div class="container my-5 py-5">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<h1 class="text-capitalise py-3 redressed banner-desc">Bienvenue <?= $_SESSION['username'] ?>
				<?php if($_SESSION['status']=='prof'): ?>
					<p>
						<a href="index.php?action=add" class="btn btn-outline-info rounded-0 merriweather">Ajouter Notes</a>
					</p>
				<?php endif ?>
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
								<td>
									<?php if(!empty($students)): ?>
										<?= $students[getIdUser($marks, $mark['number_user'])]['name']. ' ' .$students[getIdUser($marks, $mark['number_user'])]['firstname'] ?>
									<?php else: ?>
										<?= $user['name']. ' ' .$user['firstname'] ?>
									<?php endif ?>
								</td>
								<td>
									<?php if(!empty($students)): ?>
										<?= $students[getIdUser($marks, $mark['number_user'])]['number_user'] ?>
									<?php else: ?>
										<?= $user['number_user'] ?>
									<?php endif ?>
								</td>
								<td>
									<?php if(!empty($students)): ?>
										<?= strtoupper($students[getIdUser($marks, $mark['number_user'])]['filiere']) ?>
									<?php else: ?>
										<?= strtoupper($user['filiere']) ?>
									<?php endif ?>
								</td>
								<td><?= $mark['subject'] ?></td>
								<td><?= $mark['mark'] ?></td>
							</tr>
						<?php endforeach ?>
					<?php else: ?>
						<center><div class="alert alert-warning"><?= $user['name']. ' '. $user['firstname'] ?> n'a pas encore des notes</center></div>
					<?php endif ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>