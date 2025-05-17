<?php
include 'data_base.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tescior</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <?php

    $query = "SELECT DATE_FORMAT(data, '%Y-%m-%d') AS data_z1, SUM(produkty.cena * detal_zamow.sztuk) FROM detal_zamow
    LEFT JOIN produkty on produkty.idp=detal_zamow.p_id
    LEFT JOIN zamow on zamow.idz=detal_zamow.z_id
    GROUP BY data_z1;";

    $result = $conn->query($query);
    echo "<td>Data</td><td>Cena</td>";

    while($row = $result->fetch_row()){
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    $conn->close();
    ?>
</table>
</body>
</html>