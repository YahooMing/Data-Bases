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
    $idp = $_GET['product'];
    $quantity = $_GET['quantity'];
    $idz = $_GET['idz'];
    // echo "idz: ".$idz."         idp: ".$idp."           ilosc: ".$quantity;

    if($quantity < 1){
        die("Ilość nie może być mniejsza niż 1");
    }
    $query = "INSERT INTO detal_zamow (z_id,p_id, sztuk) values(".$idz.",".$idp.",".$quantity.")";
    $result = $conn->query($query);
    if($result === TRUE){
        echo "Produkt został dodany do zamówienia";
    }
    else{
        echo "ERROR: dodanie produktu do zamównie nie powiodło się";
    }
    ?>

</body>
</html>
<?php
$conn->close();
?>