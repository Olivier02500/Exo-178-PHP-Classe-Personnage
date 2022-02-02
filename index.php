<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();
$perso->setNom("Michel");
echo  "<div>" . $perso->getNom() . "</div>";

echo"<br><br>";



$perso2 = new personnage();
$perso2->setNom("Robert")  ;
echo "<div>" . $perso2->getNom() . "</div>";



$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
