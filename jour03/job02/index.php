<?php
$str = "Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie.";

for ($lettre = 0; isset($str[$lettre]); $lettre += 2) {
     echo $str[$lettre];
}
?>