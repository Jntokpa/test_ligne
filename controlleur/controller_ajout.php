<?php
if (isset($_POST['valider'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['telephone']) and !empty($_POST['email'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);

        $select_email_participant->execute(array($email));
        $email_exist = $select_email_participant->rowCount();
        if ($email_exist != 0) {
            $error = "Erreur!! Un participant avec le même email a deja été enregistré";
        } else {
            $create_participant->execute(array($nom, $prenom, $telephone, $email));
            $success = "Participant enregistré avec succès";
        }
    } else {
        $error = "Remplir les champs obligatoires*";
    }
}
