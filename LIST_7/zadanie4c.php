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
$delete = $_GET['delete'];
$idk = $_GET['idk'];

if($delete == 0){
    $name = $_GET['name'];
    $city = $_GET['city'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];

    $query = "UPDATE klienci SET nazwa = '".$name."', miasto = '".$city."', adres = '".$address."', telefon = '".$phone."' WHERE idk='".$idk."';";
    $result = $conn->query($query);
    if($result === TRUE){
        echo "Zaktualizowano klienta";
    }
    else{
        echo "ERROR: nie dało sie zaktualizować klienta";
    }
}
else {
    $query = "DELETE FROM detal_zamow WHERE z_id IN (SELECT idz FROM zamow WHERE k_id = '".$idk."')";
    $conn->query($query);

    $query = "DELETE FROM zamow WHERE k_id = '".$idk."'";
    $conn->query($query);

    $query = "DELETE FROM klienci WHERE idk='".$idk."';";
    $result = $conn->query($query);

    if($result === TRUE){
        echo "Usunięto klienta";
    }
    else{
        echo "ERROR: nie udało sie usunąć klienta";
    }
}
?>
</body>
</html>
<?php
$conn->close();
?>