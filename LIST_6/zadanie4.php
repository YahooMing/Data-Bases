<?php

function kalendarz( $days, $weekday){
    if ( $days <= 27 || $days > 31 || $weekday <=0 || $weekday > 7){
        throw new Exception("Coś tu nie bangla");
    }
    $weekdays = array(1 => "Poniedziałek", 2 => "Wtorek", 3=> "Środa", 4=> "Czwartek", 5=>"Piątek", 6=>"Sobota", 7=>"Niedziela");
    $ret = array();
    $day = 1;

    while ( $day <= $days){
        $week = array_fill(0,7,"");
        for ($i = 0; $i < 7 ; $i++){
            if (count($ret) == 0 && $i < $weekday-1){
                $week[$i] = "";
            }elseif ($day <= $days){ // ten warunek ponownie ze względu na błąd w liczeniu ostatniego tygodnia
                $dayofweek = ($weekday + $day - 2) % 7 + 1;
                $week[$i] = $day." ".$weekdays[$dayofweek];
                $day ++;
            }


        }
        $ret[] = $week;
    }
    return $ret;
}


// $tab = kalendarz(31,5);
// echo "<table border='1'>";
// foreach ($tab as $week) {
//     echo "<tr>";
//     foreach ($week as $cell) {
//         echo "<td style='text-align:center;'>$cell</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


$tab = kalendarz(29,3);
echo "<table border='1'>";
foreach ($tab as $week) {
    echo "<tr>";
    foreach ($week as $cell) {
        echo "<td style='text-align:center;'>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>