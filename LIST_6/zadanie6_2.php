<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teścior</title>
</head>
<body>
<table border='1'>
    <?php
    $n = $_GET['n'];
    $arr = array();
    for($i = 0; $i <= $n; $i++){
        for($j = 0; $j <= $n; $j++){
            if($i == 0){
                $arr[$i][$j] = $j;
            }
            elseif($j == 0 ){
                $arr[$i][$j] = $i;
            }
            else{
                $arr[$i][$j] = $i*$j;
            }
        }
    }


    foreach($arr as $row){
        echo "<tr>";
        foreach($row as $cell){
            echo "<td>".$cell."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>