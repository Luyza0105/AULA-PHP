<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
$idade = 15;

if ($idade < 12) {
    echo "Criança";
} elseif ($idade < 18) {
    echo "Adolescentes";
} else {
    echo "Adulto";
}

?>


    </main>
</body>
</html>