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
$name = $_POST['name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$query1 = "SELECT nazwa FROM produkty WHERE nazwa LIKE '".$name."';";
$query2 = "INSERT INTO produkty (nazwa, cena, ilosc) VALUES ('".$name."', '".$price."', '".$amount."')";
if($price <=0 || $amount < 0)
{
    die("Dane są niepoprawne!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Nie moze byc ujemne przecież");
}

if($conn->query($query1)->num_rows > 0){
    die("Taki rekord juz jest w bazie");
}

if ($conn->query($query2)) {
    echo "Dodano";
}
$conn->close();
?>
</body>
</html>