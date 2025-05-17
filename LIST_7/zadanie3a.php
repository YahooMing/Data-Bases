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
<form action="zadanie3b.php" method="post">
    <label>Nowe zamowienie</label><br><br>
    <label for="kliencik">Klient:</label><br>

    <select name="kliencik" id="kliencik">

<?php
    $query = "SELECT nazwa FROM klienci;";
    $result = $conn->query($query);
    while($row = $result->fetch_row()){
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
?>
    </select><br>

    <label for="ilosc">Ilość:</label><br>
    <input type="number" id="ilosc" name="ilosc" required><br>

    <label for="nazwa">Produkt:</label><br>
    <select name="nazwa" id="nazwa">
<?php
    $query = "SELECT nazwa FROM produkty;";
    $result = $conn->query($query);
    while($row = $result->fetch_row()){
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
?>
    </select><br><br>

    <input type="submit" value="Submit">

</form>
</body>
</html>
<?php
$conn->close();
?>