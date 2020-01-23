<?php

session_start();

$_SESSION['user_login'] = "";
$_SESSION['user_mdp'] = ""; 

include '..\models\function.php';

const NB_PLACE_MAX = 16;
$places = range(1, NB_PLACE_MAX);
$fileName = "..\assets\stagiaires.csv";
$tabStagiaire = readCSV($fileName, 1); // AFFICHAGE COL (-1=ALL 0=PRENOM 1=NOM)
$tabFinal = auto_pos($tabStagiaire, $places);

exportCSV($tabFinal);

?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="shuffle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Shuffle</title>

    <header class="row">
        <div class="col-lg-3">
            <div id="title">
                <a HREF="cnx.php" style="color:black;">
                    <h1>&nbsp;Shuffle Time</h1>
                </a>
            </div>
            <div id="Disconnected_btn">
                <a HREF="cnx.php" style="color:rgb(243, 95, 9);">
                    <h6>&nbsp;&nbsp; Disconnected</h6>
                </a>
            </div>
    </header>

</head>

<body>
    <style>
        a {
            /* lien du titre et du bouton deco */
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }
    </style>

    <div class="bg-img">
        </br>

        <div class="row">
            <div class="offset-5 col-lg-2 offset-5">
                <!-- Button Shuffle -->
                <form action="shuffle.php" method="post">
                    <input type="submit" id="buttonShuffle" value="Mix Place"
                        title="Un monarque est bien plus grand lorsqu'un peuple est heureux !">
                </form>
            </div>
        </div>

        </br>

        <div class="row">
            <div class="col-lg-4">
                <div id="ligne-1-bloc-1">
                    <!-- Ilot 01 -->
                    <h2>Ilot 01</h2>
                    <div id="place_1">
                        1 : <?php echo $tabFinal[1] ?>
                    </div>
                    <div id="place_2">
                        2 : <?php echo $tabFinal[2] ?>
                    </div>
                    <div id="place_3">
                        3 : <?php echo $tabFinal[3] ?>
                    </div>
                    <div id="place_4">
                        4 : <?php echo $tabFinal[4] ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="ligne-1-bloc-2">
                    <!-- Ilot 04 -->
                    <h2>Ilot 04</h2>
                    <div id="place_13">
                        13 : <?php echo $tabFinal[13] ?>
                    </div>
                    <div id="place_14">
                        14 : <?php echo $tabFinal[14] ?>
                    </div>
                    <div id="place_15">
                        15 : <?php echo $tabFinal[15] ?>
                    </div>
                    <div id="place_16">
                        16 : <?php echo $tabFinal[16] ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="ligne-1-bloc-3">
                    <!-- Ilot 3 -->
                    <h2>Ilot 03</h2>
                    <div id="place_8">
                        8 : <?php echo $tabFinal[8] ?>
                    </div>
                    <div id="place_9">
                        9 : <?php echo $tabFinal[9] ?>
                    </div>
                    <div id="place_10">
                        10 : <?php echo $tabFinal[10] ?>
                    </div>
                    <div id="place_11">
                        11 : <?php echo $tabFinal[11] ?>
                    </div>
                    <div id="place_12">
                        12 : <?php echo $tabFinal[12] ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="offset-4 col-lg-4 offset-4">
                <div id="ligne-2-bloc-1">
                    <h2>Ilot 02</h2>
                    <div id="place_5">
                        5 : <?php echo $tabFinal[5] ?>
                    </div>
                    <div id="place_6">
                        6 : <?php echo $tabFinal[6] ?>
                    </div>
                    <div id="place_7">
                        7 : <?php echo $tabFinal[7] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>