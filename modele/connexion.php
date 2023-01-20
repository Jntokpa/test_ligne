<?php
//connexion à la bdd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=simplon;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//selection
$select_email_participant = $bdd->prepare('SELECT * FROM participant WHERE email=?');
$req_select_all_participants = 'SELECT * FROM participant ORDER BY nom';

//insertion
$create_participant = $bdd->prepare('INSERT INTO participant (nom, prenom, telephone, email) VALUES (?, ?, ?, ?)');
