<?php
include 'data_base.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tescior</title>
</head>
<body>
    <?php
    #$date = $_POST['date'];
    $date = $_GET['date']; // dla zad 7.
    $query = "SELECT DATE(data), klienci.nazwa, produkty.nazwa, sztuk FROM zamow
    LEFT JOIN klienci ON k_id=idk
    LEFT JOIN detal_zamow ON idz=z_id
    LEFT JOIN produkty ON idp=p_id
    WHERE DATE(data) LIKE '".$date."'";

    $result = $conn->query($query);
    $id = 1;
    if($result->num_rows > 0){
        while($row = $result->fetch_row()){
            echo "<b>Rekord nr ".$id."</b><br>";
            echo "Klient: ".$row[1]."<br>";
            echo "Produkt: ".$row[2]."<br>";
            echo "Ilość: ".$row[3]."<br>";
            echo "Data: ".$row[0]."<br><br>";
            $id = $id +1;
        }
    }
    else{
        echo "Brak wyników <br>";
    }

    ?>
</body>
</html>
<?php
$conn->close();
?>