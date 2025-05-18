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
        $idz = $_GET['idz'];
        $idd = $_GET['idd'];
        $quantity = $_GET['quantity'];
        $choice = $_GET['delete'];
        $idp = $_GET['productID'];

        if($choice == 0){
            $query = "UPDATE detal_zamow SET p_id = '".$idp."', sztuk = '".$quantity."' WHERE idd='".$idd."';";
            $result = $conn->query($query);
            if($result === TRUE){
                echo "Aktualizacja przebiegła pomyślnie";
            }
            else{
                die("ERROR: nie udało sie zaktualizować detali zamówień");
            }
        }
        else{
            $query = "DELETE FROM detal_zamow WHERE p_id=".$idp."";
            $result = $conn->query($query);
            if($result === TRUE){
                echo "Usunięto ".$idp." z bazy";
            }
            else{
                die("ERROR: nie udało się usunąć rekordu");
            }
        }

    ?>

</body>
</html>
<?php
$conn->close();
?>