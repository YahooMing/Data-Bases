<?php
include 'data_base.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teścior</title>
</head>
<body>
    <?php
    $kliencik = $_POST['kliencik'];
    $nazwa = $_POST['nazwa'];
    $ilosc = $_POST['ilosc'];
    if($ilosc <= 0){
        die("Ilość musi być dodadnia");
    }

    $query = "SELECT ilosc FROM produkty WHERE nazwa LIKE '".$nazwa."';";
    $result = $conn->query($query)->fetch_row()[0];
    if($result<= 0){
        die("Nie ma takiego produktu na stanie");
    }

    $query = "SELECT idk FROM klienci WHERE nazwa LIKE '".$kliencik."'";
    $result = $conn->query($query)->fetch_row()[0];
    $idk = $result;
    if($result === FALSE){
        die("Nie ma takiego klienta");
    }

    $query = "SELECT idp FROM produkty WHERE nazwa LIKE '".$nazwa."'";
    $idp =  $result = $conn->query($query)->fetch_row()[0];
    if($result === FALSE){
        die("Nie ma takiego produktu");
    }

    $query = "SELECT ilosc FROM produkty WHERE nazwa='".$nazwa."';";
    $_ilosc =  $result = $conn->query($query)->fetch_row()[0];

    if($_ilosc < $ilosc){
        die("Za mało na stanie");
    }

    $tera = date("Y-m-d H:i:s");
    $query = "INSERT INTO zamow (k_id, data) VALUES ('".$idk."', '".$tera."')";
    $result = $conn->query($query);
    if($result === FALSE){
        die("ERROR, nie można dodać do tabeli");
    }
    $idz = $conn->insert_id;

    $query = "INSERT INTO detal_zamow (z_id, p_id, sztuk) VALUES ('".$idz."','".$idp."','".$ilosc."')";
    $result = $conn->query($query);
    if($result === FALSE){
        die("ERROR nie da sie dodać");
    }

    $query = "UPDATE produkty SET ilosc = ".$_ilosc-$ilosc." WHERE idp='".$idp."';";
    $result = $conn->query($query);
    if($result === FALSE){
        die("ERROR, odjecie zamówienia od ilości na stanie nie wypaliło");
    }

    echo "Wszystko git";
    $conn->close();
    ?>
</body>
</html>