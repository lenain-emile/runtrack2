<?php 
for ($nombre = 0; $nombre <= 100; $nombre++) {
  if ($nombre == 42) {
    echo "La Plateforme<br>";
  }
  elseif ($nombre >= 25 && $nombre <= 50) {
    echo "<u>$nombre</u><br>";
  }
  elseif ($nombre >= 0 && $nombre <= 20) {
    echo "<i>$nombre</i><br>"; }
  else {
    echo "$nombre<br>";
  }
}
?>