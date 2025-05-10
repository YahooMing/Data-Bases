<?php
function insertion_sort(&$array){
    for ($i = 1; $i < sizeof($array); $i++) {
        $that = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $that) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $that;
    }
}

$array = array(7,6,5,4,3,2,1);

echo "Tablica przed sortowaniem: ";
echo implode(", ", $array) . "<br>";
insertion_sort($array);
echo "Tablica po sortowaniu: ";
echo implode(", ", $array) . "<br>";
?>