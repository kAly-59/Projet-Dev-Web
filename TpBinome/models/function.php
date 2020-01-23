<?php 

function readCSV($fileName){
    $row = 0;
    //Initialisation du tableau de sortie
    $tabFromCSV = array();
    //Test si le fichier est lisible 'r' 
    if (($ficCSV = fopen("$fileName", "r")) != FALSE) {
        //parcour le fichier ligne par ligne pour alimenter mon tableau de sorti; TQ il y a une ligne
        while (($tabCol = fgetcsv($ficCSV, ",")) !== FALSE) {  
                $tabFromCSV[] = implode(",", $tabCol); 
            }    
    }
        fclose($ficCSV);
        //renvoie le tableau de sortie alimenté par le fichier CSV
        return $tabFromCSV;
}

function function_binome(array $tab){
    $bi = array();
         //je remplis mon tableau de binômes
        for ($j=0; $j < count($tab); $j+=2) { 
            
            $nom1 = $tab[$j];
            $nom2 = $tab[count($tab)-1 - $j];
            $bi[] = "$nom1 | $nom2";
                
        }
      // shuffle($bi);
    return $bi;
} 

function exportCSV($binomes){
    date_default_timezone_set('Europe/Paris');
    $date = date("(m.d.y_h.i.s)");
    $ficCSV = fopen($date . "Tirage.csv", 'w');
    fputs($ficCSV, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
    foreach ($binomes as $key => $value) {
        fputcsv($ficCSV, [$value], ":", " ");
    }
}

function modifCSV(array $tab){
    $fp = fopen("../assets/stagiaires.csv", 'w+');
    //variable temporaire qui va stocker une donnée
    $tmp = $tab[1];
        //je décale les données de mon tableau
        for ($k=1; $k < (count($tab)-1); $k++) { 
            $tab[$k] = $tab[$k+1];
        }
    //j'attribue ma donnée stockée
    $tab[15] = $tmp;
    //je modifie mon fichier CSV avec les nouvelles données
    for ($i=0; $i < count($tab) ; $i++) { 
         
        fputcsv($fp, [$tab[$i]],",");
    }
        
    fclose($fp);
}







