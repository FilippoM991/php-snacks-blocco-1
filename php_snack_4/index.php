<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
$array_15_casuali = creaArrayNumeri(1, 20, 15);
echo "<pre>";
var_dump($array_15_casuali);
echo "</pre>";

function creaArrayNumeri($min, $max, $nItems) {
    $newArray = [];
    while (count($newArray) < $nItems) {
    $number = rand($min, $max);
    if (!in_array($number, $newArray)) {
    $newArray[] = $number;
    }
    }
    return $newArray;
}
?>
