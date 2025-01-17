<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$nbvoyelles = 0;
$nbconsonnes = 0;

$dic = [
  "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'],
  "consonnes" => ['z', 'r', 't', 'p', 'q', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'w', 'x', 'c', 'v', 'n', 'b', 
                  'Z', 'R', 'T', 'P', 'Q', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'W', 'X', 'C', 'V', 'N', 'B']
];

// Parcours de la chaîne de caractères
for ($i = 0; isset($str[$i]); $i++) {
    foreach ($dic as $key => $value) {
        if ($key === "voyelles") {
            // Vérifie si le caractère est une voyelle
            for ($j = 0; isset($value[$j]); $j++) {
                if ($str[$i] == $value[$j]) {
                    $nbvoyelles++;
                }
            }
        } elseif ($key === "consonnes") {
            // Vérifie si le caractère est une consonne
            for ($j = 0; isset($value[$j]); $j++) {
                if ($str[$i] == $value[$j]) {
                    $nbconsonnes++;
                }
            }
        }
    }
}

// tableau
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>$nbvoyelles</td><td>$nbconsonnes</td></tr>";
echo "</tbody>";
echo "</table>";
?>
