<?php
$title = 'Inscription';
ob_start();
$invalid = false;
?>
<?php
if(isset($_POST['username'])){
    $invalid = true;
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $username = $_POST['username'];
    $photo = $_POST['photo'];
    $numberProf = $_POST['number_prof'];
}
?>


<div class="container d-flex justify-content-center" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)">
    <div class="row">
        <div class="card w-100 border-0 bg-light text-dark" style="width: 18rem;box-shadow:0 0 .3rem .04rem #000">
            <div class="card-body">
                <form action="index.php?action=registerProf" method="post" class="form-group needs-validation" novalidate method="post">
                    <h5 class="card-title text-center">Bienvenue</h5>
                    <h6 class="card-subtitle mb-3 text-muted text-center">Creer un compte</h6>
                    <?php if($invalid):?>
                        <div class="alert alert-danger">
                            <?= $username ?> est deja utilise :(
                        </div>
                    <?php endif ?>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?= isset($name) ? $name : '' ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="<?= isset($firstname) ? $firstname : '' ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="number" name="number_prof" class="form-control" placeholder="matricule" value="<?= isset($numberProf) ? $numberProf : '' ?>" required>
                    </div>
                    <div class="card mb-3 p-2">
                        <div class="card-title">Matiere(s)</div>
                        <div class="form-check-inline">
                            <input class="form-check-input" name="subject" type="checkbox" value="ia" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                ia
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" name="subject" type="checkbox" value="elec" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                elec
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" name="subject" type="checkbox" value="amvc" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                amvc
                            </label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="example@example.com" value="<?= isset($email) ? $email : '' ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= isset($username) ? $username : '' ?>" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
                        <input type="file" name="photo" class="form-control" placeholder="Your profile" value="<?= isset($photo) ? $photo : '' ?>" required>
                    </div>
                    <button class="btn btn-primary float-end">Sign Up</button>
                    <a href="index.php?action=login" class="float-start btn btn-secondary">Already have an account</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php'
?>