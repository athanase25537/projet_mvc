<?php
$title = 'Professeur ou Etudiant(e)';
ob_start(); 
?>

<!-- Button trigger modal -->
<button style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); height: 100px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Confirmer que vous etes professeur
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrer le mot de passe pour les profs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="post" action="index.php?action=choices">
                <!-- password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="pass" id="pass" required class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Confirmer</button>
            </form>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';