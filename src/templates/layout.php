<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="../src/assets/css/bootstrap.min.css" rel="stylesheet" />
		<!-- <link rel="stylesheet" href="../src/assets/css/styles.css" /> -->
        <script src="../src/assets/js/bootstrap.bundle.min.js"></script>

		<title><?= $title ?></title>
	</head>
	<body>
		<?php if($title == 'Home'):?>
            <nav class="cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100">
                <div class="container-fluid">
                <a class="navbar-brand text-uppercase mx-4 py-3 fw-bolder" href="#">
                    <!-- <?= '<img src="../src/img/' . $user['photo'] . '" width="50px" height="50px" style="border-radius:50px;object-fit:cover">'; ?> -->
                    <!-- <?= $user['username'] ?> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-4">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#marks">Notes</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="btn btn-order rounded-0" href="../src/controllers/logout.php">Deconnecter</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        <?php endif ?>
    <?= $content ?>
	<script src="../src/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>