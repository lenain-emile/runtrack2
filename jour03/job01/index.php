<?php
$nombre = [200, 204, 173, 98, 171, 404, 459];
foreach ($nombre as $nombre) {
  if ($nombre % 2 == 0) {
    echo "$nombre est pair<br>";
  }
  else {
    echo "$nombre est impair<br>";
  }
}
?>