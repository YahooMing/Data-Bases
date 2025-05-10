<?php
$sum = 0;
foreach($_POST as $i)
{
    $sum += strlen($i);
}
echo "Łączna długość: ".$sum;
?>