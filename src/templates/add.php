<?php
$title = 'Add Content';
ob_start();
// $id = $user['id'];
?>

<div class="container d-flex justify-content-center" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)">
    <div class="row">
        <div class="card w-100 border-0 bg-light text-dark" style="width: 18rem;box-shadow:0 0 .3rem .04rem #000">
            <div class="card-body">
                <form action="index.php?action=add" class="form-group" method="post">
                    <h5 class="card-title text-center">Bienvenue</h5>
                    <h6 class="card-subtitle mb-5 text-muted text-center">Ajouter Notes</h6>

                    <div class="input-group mb-3">
                        <input type="text" name="matiere" class="form-control" required>
                        <span class="input-group-text" id="basic-addon1">Matiere</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="number_user" class="form-control" required>
                        <span class="input-group-text" id="basic-addon1">Numero de l'eleve</span>
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="marks" class="form-control">
                        <span class="input-group-text" id="basic-addon1" required>Note de l'eleve</span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="observation" class="form-control" required>
                        <span class="input-group-text" id="basic-addon1">Observation</span>
                    </div>

                    <!-- <input type="hidden" name="id_user" value="<?= $id ?>"> -->
                    <button class="btn btn-primary float-end">Ajouter</button>
                    <a href="index.php?action=register" class="btn btn-light float-left">Retour</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';