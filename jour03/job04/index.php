<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compteur = 0;
for ($lettre = 0; isset($str[$lettre]); $lettre++) {
  $compteur++;
}
echo "le nombre de caractère de la chaine est : " . $compteur;
?>