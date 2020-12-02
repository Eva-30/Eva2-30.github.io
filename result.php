
<div class="resultatmultiple">
    <?php
        $nombreDes = $_POST['nombre_de_des'] ?? false;
        $nombreFaces = $_POST['nombre-face_de_des'] ?? false;
        $resultat = 0;
        $tableauResult = array("");
        $totalResult = 0;

            
            if ($nombreFaces ==4) {
                $resultat = random_int(1,4); 
            }
            elseif ($nombreFaces ==6) {
                $resultat = random_int (1,6);
            }
            elseif ($nombreFaces ==8) {
                $resultat = random_int (1,8);
            }
            elseif ($nombreFaces ==10) {
                $resultat = random_int (1,10);
            }
            elseif ($nombreFaces ==12) {
                $resultat = random_int (1,12);
            }
            elseif ($nombreFaces ==20) {
                $resultat = random_int (1,20);
            }   
            // pour chaque nombre de dés obtenir  autant de résultat.
            // Que chaque résultat corresponde au nombre de faces de dés     
            
            for ($i = 1; $i <= $nombreDes; $i++) {
                $resultat = random_int (1,$nombreFaces); 
                echo 'voici le résultat du dé : '.$resultat.'<br/>';
                array_push($tableauResult,"$resultat");
            }
                $totalResult = array_sum ($tableauResult);
    ?>
</div>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>result.php</title>
    </head>
        <body>
            <div class="phrase">
                <p>Voici le résultat de votre lancé de dés, mon ami(e) : <?php echo $totalResult ?></p> 
            </div> 
            <div class="boutonretour">
                <a href="index.html"><input type="submit" value="Retour"></a>
            </div>
            <div class="boutonrelancer">
                <form method="post" action="result.php">
                <input name="nombre_de_des" type="hidden" value="<?php echo ($nombreDes);?>">
                <input name="nombre-face_de_des" type="hidden" value="<?php echo ($nombreFaces);?>">
                <input type="submit" value="Relancez vos dés">
                </form>
            </div>
        </body>
</html>

   
