<style>
        table{
            border-collapse: collapse;
        }
        td{
            width: 20px;
            height: 20px;
            border: 1px solid black;
        }
</style>
<?php
    $array = array('00','33','66','99','cc','ff');
    echo "<table>";
    for( $i = 0; $i < 36; $i++){ #(6 * 6)
        echo "<tr>";
        for( $j = 0; $j < 6; $j++ ){
            $r = $array[$j];
            $temp = $i % 6;
            $g = $array[$temp];

            if( $temp == 0 ){
                $b = $array[$i / 6];
            }
            $rgb = $r.$g.$b;
            echo '<td style = "background-color:'.$rgb.'"></td>';
        }
        echo "</tr>";
    }
    echo "</table>"
?>