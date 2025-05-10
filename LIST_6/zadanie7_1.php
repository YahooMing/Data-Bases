<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<form action="zadanie7_2.php" method="post">
    <label for="name">imie:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="surname">nazwisko:</label>
    <input type="text" id="surname" name="surname" required><br><br>

    <label for="interests">zainteresowania:</label><br>
    <input type="checkbox" id="interest1" name="interests[]" value="agonie">
    <label for="interest1">agonia</label><br>

    <input type="checkbox" id="interest2" name="interests[]" value="depresje">
    <label for="interest2">depresja</label><br>

    <input type="checkbox" id="interest3" name="interests[]" value="łamigłówki">
    <label for="interest3">łamigłówki</label><br>

    <input type="checkbox" id="interest4" name="interests[]" value="gry">
    <label for="interest4">gry</label><br>
    
    <input type="checkbox" id="interest5" name="interests[]" value="dziewczyny">
    <label for="interest5">dziewczyny</label><br><br>

    <label for="subjects">ulubione przedmioty:</label><br>
    <input type="checkbox" id="subject1" name="subjects[]" value="algorytmy i struktury danych">
    <label for="subject1">algorytmy i struktury danych</label><br>

    <input type="checkbox" id="subject2" name="subjects[]" value="bazy danych">
    <label for="subject2">Bazy danych</label><br>

    <input type="checkbox" id="subject3" name="subjects[]" value="matma dyskretna (po cichu)">
    <label for="subject3">matma dyskretna (po cichu)</label><br>

    <input type="checkbox" id="subject4" name="subjects[]" value="PAM">
    <label for="subject4">PAM</label><br>

    <input type="checkbox" id="subject5" name="subjects[]" value="modelowanie komputerowe">
    <label for="subject5">modelowanie komputerowe</label><br><br>

    <label for="year">rok studiów:</label><br>
    <input type="radio" id="year1" name="year" value="1">
    <label for="year1">1</label><br>

    <input type="radio" id="year2" name="year" value="2">
    <label for="year2">2</label><br>

    <input type="radio" id="year3" name="year" value="3">
    <label for="year3">3</label><br>

    <input type="radio" id="year4" name="year" value="4">
    <label for="year4">4</label><br>

    <input type="radio" id="year5" name="year" value="5">
    <label for="year5">5</label><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
