<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $interests = $_POST['interests'];
    $subjects =$_POST['subjects'];
    $year = $_POST['year'];
    echo "Student $year roku $name $surname lubi zajęcia z: ".implode(", ", $subjects);
    echo ". W wolnym czasie uprawia: " .implode(", ", $interests).".";
    ?>
</body>
</html>
