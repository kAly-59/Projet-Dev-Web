<?php 

// Fonction shuffle
function auto_pos($tabStagiaire, $places){
    shuffle($tabStagiaire);

    for ($i = 0; $i < NB_PLACE_MAX; $i++) {
        $tabFinal[$places[$i]] = $tabStagiaire[$i];
    }
    return $tabFinal;
}

// Fonction lecture du fichier CSV
function readCSV($fileName, $col){
    $row = 0;
    //Initialisation du tableau de sortie
    $tabFromCSV = array();
    //Test si le fichier est lisible 'r' 
    if (($ficCSV = fopen("$fileName", "r")) != FALSE) {
        //parcour le fichier ligne par ligne pour alimenter mon tableau de sorti; TQ il y a une ligne
        while (($tabCol = fgetcsv($ficCSV, ",")) !== FALSE) {  
           if ($col == -1) {
                $tabFromCSV[] = implode(",", $tabCol); 
            }
            elseif ($col == 0) {
                    $tabFromCSV[] = $tabCol[0];
            }
            elseif ($col == 1) {
                    $tabFromCSV[] = $tabCol[1];   
            } 
            elseif ($col == 2) {
                $tabFromCSV[] = $tabCol[2]; 
            }
        }      
    }
        fclose($ficCSV);
        //renvoie le tableau de sortie alimenté par le fichier CSV
        return $tabFromCSV;
}

// Fonction d'export fichier CSV (ajout date & heure)
function exportCSV($tabFinal){
    date_default_timezone_set('Europe/Paris');
    $date = date("(m.d.y_h.i.s)");
    $ficCSV = fopen($date . "Tirage.csv", 'w');
    fputs($ficCSV, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
    foreach ($tabFinal as $key => $value) {
        fputcsv($ficCSV, [$key, $value], ":", " ");
    }
}

// Function check login & mdp 
function checkUser($login , $mdp){
    $tab = array();
//Test si fichier lisible 'r' 
if (($ficCSV = fopen("../assets/Dbuser.csv", "r")) !== FALSE) {
    //Parcour fichier ligne par ligne pour alimenter mon tableau de sorti; TQ il y a une ligne
    while (($TabLine = fgetcsv($ficCSV, ",") ) !== FALSE) {
            $tab[$TabLine[4]] = $TabLine[5];  
    }
    fclose($ficCSV);
}
    //je parcour mes clefs et valeurs
    foreach ($tab as $login => $mdp) {      
    //je verifie si ma saisie correspond à mes donnees  
        if (($login == $_POST['user_login'])&&($mdp == $_POST['user_mdp'])) {
                return true;
        }
    }      
}
// Function pour entrer info dans un fichier CSV (Crée si abs)
function inscriptionToCsv ($tabInscript) {
    $Inscript_file = fopen ("../assets/Dbuser.csv", "a+");
    fputcsv($Inscript_file, $tabInscript, ",");
    fclose ($Inscript_file);
}



