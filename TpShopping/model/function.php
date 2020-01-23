<?php

function readCSV(string $fileName, $col)
{
    //Test si le fichier est lisible 'r' 
    if (($ficCSV = fopen("$fileName", "r")) !== FALSE) {
        //parcour le fichier ligne par ligne pour alimenter mon tableau de sorti; TQ il y a une ligne
        while (($csvTabLine = fgetcsv($ficCSV, ",")) !== FALSE) {
            if ($col == 0) {
                $tabShop[] = $csvTabLine[$col];
            } else if ($col == 1) {
                $tabShop[] = $csvTabLine[$col];
            } else if ($col == 2) {
                $tabShop[] = $csvTabLine[$col];
            }
        }
        fclose($ficCSV);
    } else {
        echo "Probleme fichier.\n";
    }
    //renvoie le tableau de sortie alimenté par le fichier CSV
    unset($tabShop[0]); // supp ligne 0
    $tabShop = array_values($tabShop);
    return $tabShop;
}

function IDNumber(string $ID)
{
    $filename = "../assets/ID_acheteur.csv";
    if (($ficCSV = fopen("$filename", "r")) !== FALSE) {
        //parcour le fichier ligne par ligne pour alimenter mon tableau de sorti; TQ il y a une ligne
        while (($csvTabLine = fgetcsv($ficCSV, ",")) !== FALSE) {
            $tabBuyer[$csvTabLine[0]] = $csvTabLine[1];
        }
        fclose($ficCSV);
    } else {
        echo "Probleme fichier.\n";
    }
    foreach ($tabBuyer as $key => $value) {
        //je verifie si ma saisie correspond à mes donnees  
        if (($key == $ID)) {
            return $value;
        }
    }
}
