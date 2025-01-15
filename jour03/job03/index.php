<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";

for ($lettre = 0; isset($str[$lettre]); $lettre ++) {
  $caractere = $str[$lettre];
  $okvoyelle = false;
  //lister les caractère
  for ($voyellenb = 0; isset($voyelles[$voyellenb]); $voyellenb++) {
    if ($caractere == $voyelles[$voyellenb]) {
      $okvoyelle = true;
      break;
    }
  }
  if ($okvoyelle) {
    echo "$caractere";
  }
}
?>