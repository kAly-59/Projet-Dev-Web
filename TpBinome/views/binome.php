<?php


session_start();

include '..\models\function.php';
$fileName = "..\assets\stagiaires.csv";
$tabStagiaire = readCSV($fileName); // AFFICHAGE COL (-1=ALL 0=PRENOM 1=NOM);
$part1 = function_binome($tabStagiaire);
$tabStagiaire = modifCSV ($tabStagiaire);
//exportCSV($part1);

$_SESSION["newSession"]= $part1;
print_r ($part1);

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Binôme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="shuffle.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: gray;
    }

    .container-fluid {
        margin-top: 2%;
        padding-bottom: 20px;
        background-color: white;
    }

    .container_titre {
        padding-top: 2%;
        text-align: center;
        font-family: 'Nunito', sans-serif;
        color: white;
    }

    h1 {
        font-size: 4em;
    }

    #buttonMix {
        font-family: 'Nunito', sans-serif;
        margin-top: 2%;      
    }

    .tirage_nom {
        text-align: center;
        font-family: 'Nunito', sans-serif;
        padding-top: 1%;
    }

    .titre_tirage {
        padding-top: 2%;
        text-align: center;
        font-family: 'Nunito', sans-serif;
        color: rgb(31, 145, 65);
    }
</style>

<body>

    <div class=container_titre>
        <div class="offset-3 col-lg-6">
            <h1>Binôme</hi>
        </div>
    </div>

    <div class=container-fluid>

        <div class="text-center">
            <!-- Button Mix -->
            <div class=buttonMix>
                <form action="binome.php" method="post">
                    <input type="submit" id="buttonMix" value="Création des binômes"
                        title="Un monarque est bien plus grand lorsqu'un peuple est heureux !">
                </form>
            </div>
        </div>

        <div class="offset-3 col-lg-6">
            <div class=titre_tirage>
                <h2>Tirage</h2>
            </div>
            <div class="tirage_nom">
                <div class="tirage1">
                    1 : <?php echo $part1[0]?>
                </div>
                <div class="tirage2">
                    2 : <?php echo $part1[1]?> 
                </div>
                <div class="tirage3">
                    3 : <?php echo $part1[2]?>
                </div>
                <div class="tirage4">
                    4 : <?php echo $part1[3]?>
                </div>
                <div class="tirage5">
                    5 : <?php echo $part1[4]?>
                </div>
                <div class="tirage6">
                    6 : <?php echo $part1[5]?> 
                </div>
                <div class="tirage7">
                    7 : <?php echo $part1[6]?> 
                </div>
                <div class="tirage8">
                    8 : <?php echo $part1[7]?> 
                </div>
            </div>
        </div>

    </div>



</body>

</html>