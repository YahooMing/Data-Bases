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
    <form action="zadanie5b.php" method="get">
        <label for="idz">Id zamówienia: </label><br>
        <select name="idz" id="idz">
    <?php
    $query = "SELECT idz FROM zamow GROUP BY idz ASC;";
    $result = $conn->query($query);
    while($row = $result->fetch_row())
    {
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