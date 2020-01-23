<?php

include '../models/function.php';
$id ='';
$prenom = '';
$nom = '';
$mail = '';
$login = '';
$mdp = '';
$tel = '';
$genre = '';
$validation = true;

// validation des données du formulaire
if ($_POST) {
    // Attrib 'id TEST '
    if (isset($_POST['user_od']) && !empty($_POST['user_id'])) {
        // il n'y a pas d'erreur
        // on peut stocker la valeur du champ dans une variable
            $id = $_POST['user_id'];
        }
    // validation du champ 'prenom'
    if (isset($_POST['user_prenom']) && !empty($_POST['user_prenom'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $prenom = $_POST['user_prenom'];
    }
// validation du champ 'nom'
    if (isset($_POST['user_nom']) && !empty($_POST['user_nom'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $nom = $_POST['user_nom'];
    }
    // validation du champ 'mail'
    if (isset($_POST['user_adresse']) && !empty($_POST['user_adresse'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $mail = $_POST['user_adresse'];
    }
// validation du champ 'login'
    if (isset($_POST['user_login']) && !empty($_POST['user_login'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $login = $_POST['user_login'];
    }
    // validation du champ 'mdp'
    if (isset($_POST['user_mdp']) && !empty($_POST['user_mdp'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $mdp = $_POST['user_mdp'];
    }
// validation du champ 'tel'
    if (isset($_POST['user_tel']) && !empty($_POST['user_tel'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $tel = $_POST['user_tel'];
    }
// validation du champ 'genre'
    if (isset($_POST['user_gender']) && !empty($_POST['user_gender'])) {
    // il n'y a pas d'erreur
    // on peut stocker la valeur du champ dans une variable
        $genre = $_POST['user_gender'];
    }

    if ($validation) {
    $ligne = [$prenom, $nom, $genre, $tel, $login, $mdp, $mail] ;
    inscriptionToCSV($ligne);
        header('Location: ../views/cnx.php');
    } else {
        header ('Location: ../views/inscription.php');
    }
}

?>