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
<form action="zadanie4b.php" method="get">
    <label for="klient">Klient:</label><br>
    <select name="klient" id="klient">
    <?php
    $query = "SELECT idk FROM klienci;";
    $result = $conn->query($query);
    while($row = $result->fetch_row()){
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    ?>
    </select><br><br>

    <input type="submit" value="Przejdź do edycji">

</form>
</body>
</html>
<?php
$conn->close();
?>