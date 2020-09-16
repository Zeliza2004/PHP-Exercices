<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Cours PHP & MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>
<body>
<h1>Enoncé</h1>
<p>Créez une fonction qui prend un paramètre de type entier, cela déterminera la hauteur (en lignes) d'un triangle isocèle
    rempli d'étoiles qu'il faudra afficher à l'écran. Le sommet du triangle sera toujours constitué de 2 étoiles comme dans l'exemple ci-dessous.</p>
<p>Exemple</p>
<p>display_triangle(10) ;</p>
<p>Produira le résultat suivant :</p>
<p>**</p>
<p>****</p>
<p>******</p>
<p>********</p>
<p>**********</p>
<p>************</p>
<p>**************</p>
<p>****************</p>
<p>******************</p>
<p>********************</p>

<p>Le triangle fait 10 lignes de haut. Vous trouverez comment faire pour que le résultat s'affiche bien comme ça en HTML.</p>

<?php
function display_triangle($hauteur){
//Boucle total de ligne (Horizontal)
    for ($i = 0; $i < $hauteur; $i++){
        //Boucle des espaces, on retire 1 espace a
        //chaque fois qu'on descend d'une ligne

        for ($k = ($hauteur - $i); $k > 0; $k--){
            echo " ";
        }
        //Bloucle d'etoiles on ajoute a fur et a mesure
        // 1er ligne : $z <= $i = 0 <= 0 (Donc on en met une )
        // 2eme ligne: $z <= $i = 0 <= 1 (Donc on en met deux )
        // et ainsi de suite a chaque fois $z doit être pareil que $i
        for($z=0;$z<=$i;$z++){
            echo "**";
        }
        echo "<br>";
    }
}
display_triangle(10)




?>
</body>
</html>
