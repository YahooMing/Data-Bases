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
<form action="zadanie4c.php" method="get">
<label for="idk">Id:</label><br>
<?php
$idk = $_GET['klient'];
echo "<input type='text' disabled value='".$idk."'><br>";
echo "<input type='hidden' id='idk' name='idk' value='".$idk."'>";

$query = "SELECT nazwa, miasto, adres, telefon FROM klienci WHERE idk=".$idk.";";
$result = $conn->query($query);
if($result->num_rows > 0){
    $row = $result->fetch_row();
    echo "<label for='name'>Nazwa:</label><br>";
    echo "<input type='text' id='name' name='name' value='".$row[0]."'><br>";

    echo "<label for='city'>Miasto:</label><br>";
    echo "<input type='text' id='city' name='city' value='".$row[1]."'><br>";

    echo "<label for='address'>Adres:</label><br>";
    echo "<input type='text' id='address' name='address' value='".$row[2]."'><br>";

    echo "<label for='phone'>Telefon:</label><br>";
    echo "<input type='tel' id='phone' name='phone' value='".$row[3]."' pattern='[0-9]{9}'><br>";

    echo "<label for='delete'>usunąć klienta z id ".$idk." ?:</label><br>";
    echo "<input type='radio' name='delete' value='1'>";
    echo "<label for='delete'>Tak</label>";
    echo "<input type='radio' name='delete' value='0' checked>";
    echo "<label for='delete'>Nie</label><br><br>";
    echo "<input type='submit' value='Prześlij formularz'>";
}
else{
    echo "Nie znaleziono klienta z id: ".$idk;
}
?>
</form>
</body>
</html>
<?php
$conn->close();
?>