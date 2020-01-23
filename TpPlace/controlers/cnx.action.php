<?php

    include '..\models\function.php';
    
    // validation des données du formulaire
    if ($_POST) {
        // validation du champ 'user_login & user_mdp'
        if (isset($_POST['user_login']) && !empty($_POST['user_mdp'])) {
            // on peut stocker les valeurs du champ dans des variable
            $login = $_POST['user_login'];  
            $mdp = $_POST['user_mdp'];
            $checkForm = checkUser($login, $mdp);
                if ($checkForm == true) {
                    header("Location: ../views/shuffle.php");
                } else {
                    header("Location: ../views/cnx.php");
                }
                } else {
                    header("Location: ../views/cnx.php");  
                }
    }
    
?>