<?php
for ($nombre = 0; $nombre <= 1337; $nombre++) {
  if ($nombre == 26 || $nombre == 37 || $nombre == 88 || $nombre == 1111) {
    continue;
  }
  else {
    echo"$nombre<br>";
  }
}
?>