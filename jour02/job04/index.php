<?php
for ($nombre = 1; $nombre <= 100; $nombre++) {
  if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "FizzBuzz<br>";
  }
  elseif ($nombre % 3 == 0) {
    echo "Fizz<br>";
  }
  elseif ($nombre % 5 == 0) {
    echo "Buzz<br>";
  }
  else {
    echo "$nombre<br>";
  }
}
?>