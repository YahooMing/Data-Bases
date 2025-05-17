<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tescior</title>
</head>
<body>
    <form action="zadanie2b.php" method="post">
        <label for="name">nazwa:</label><br>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="amount">ilość:</label><br>
        <input type="number" id='amount' name='amount' required>
        <br>

        <label for="price">cena:</label><br>
        <input type="number" id='price' name='price' required>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>