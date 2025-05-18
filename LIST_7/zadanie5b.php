<?php
include 'data_base.php';
$idz = $_GET['idz'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tescior</title>
</head>
<body>
    <label>=========== dodaj nowe zamówienie ===========</label><br>
        <form action="zadanie5d.php" method='get'>
            <label for="product">Produkt: </label><br>
            <select name="product" id='product'>
            <?php
                $query = "SELECT idp, nazwa FROM produkty;";
                $result = $conn->query($query);
                while($row = $result->fetch_row()){
                    echo "<option value='".$row[0]."'>$row[1]</option>";
                }
            echo "<input type='hidden' id='idz' name='idz' value='".$idz."'>";
            ?>
            </select><br><br>
            <label for="quantity">Ilość: </label><br>
            <input type="number" name = 'quantity' id ='quantity' value='0'><br><br>

            <input type="submit" value="Dodaj">
        </form>
    <br> <br>
    <label>=========== modyfikuj detale zamówienia ===========</label><br>
        <?php
        echo "<input type='hidden' disabled value='".$idz."'><br>";

        $query = "SELECT p_id, sztuk, nazwa, idd FROM detal_zamow LEFT JOIN produkty ON idp=p_id WHERE z_id='".$idz."'";
        $result = $conn->query($query);
        while($row = $result->fetch_row()){
            echo "<form action='zadanie5c.php' method='get'>";

            echo "<label for='productId'>produkt: </label><br>";
            echo "<select name='productID' id='productID'>";
            $query1 = "SELECT idp, nazwa FROM produkty WHERE idp NOT LIKE ".$row[0].";";
            $result1 = $conn->query($query1);
            while($row1 = $result1->fetch_row()){
                echo "<option value='".$row1[0]."'>$row1[1]</option>";
            }
            echo "<option selected value='".$row[0]."'>".$row[2]."</option></select><br>";

            echo "<label for='quantity'>ilosc:</label><br>";
            echo "<input type='text' name='quantity' id='quantity' value='".$row[1]."'><br>";

            echo "<label for='delete'>czy chcesz usunąć produkt z zamówienia?</label><br>";
            echo "<input type='radio' name='delete' value='1'>";
            echo "<label for='delete'>tak</label>";
            echo "<input type='radio' name='delete' value='0' checked>";

            echo "<label for='delete'>nie</label><br><br>";
            echo "<input type='submit' value='Aktualizuj'>";

            echo "<input type='hidden' id='idz' name='idz' value='".$idz."'>";
            echo "<input type='hidden' id='idd' name='idd' value='".$row[3]."'>";

            echo "</form> <br>";
            echo "==================================";
        }
        ?>
</body>
</html>
<?php
$conn->close();
?>