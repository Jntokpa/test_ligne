<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Enregistrer un partipant</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="liste.php" class="btn btn-sm btn-outline-danger">Liste des participants</a>
        </div>
    </div>
</div>

<!--h2>Section title</h2-->
<div>
    <form method="POST" action="">
        <div class="mb-3">
            <span class="text-danger font-weight-bold">
                <?php if (isset($error)) {
                    echo $error;
                } ?>
            </span>
            <span class="text-success font-weight-bold">
                <?php if (isset($success)) {
                    echo $success;
                } ?>
            </span>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php if (isset($error)) {
                                                                                                echo $_POST['nom'];
                                                                                            } ?>" required>
                <label for="floatingInput">Nom</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="prenom" placeholder="Prenoms" value="<?php if (isset($error)) {
                                                                                                        echo $_POST['prenom'];
                                                                                                    } ?>" required>
                <label for="floatingInput">Prenoms</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="telephone" placeholder="Telephone" value="<?php if (isset($error)) {
                                                                                                            echo $_POST['telephone'];
                                                                                                        } ?>" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                <label for="floatingInput">Téléphone</label>
                Ex: 0102030405
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if (isset($error)) {
                                                                                                        echo $_POST['email'];
                                                                                                    } ?>" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <button type="submit" class="btn btn-outline-danger" name="valider">ENREGISTRER</button>
            </div>
        </div>
    </form>
</div>