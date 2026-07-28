<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>

    <?php 
        const NOME_EMPRESA = 'Chanel';

        $produtos = [
            'Vestidos',
            'Bolsa',
            'Bota'
        ];

        echo "A " . NOME_EMPRESA . " fornece: " . $produtos[0] . "<br>";
        echo "A " . NOME_EMPRESA . " fornece: " . $produtos[1] . "<br>";
        echo "A " . NOME_EMPRESA . " fornece: " . $produtos[2] . "<br>";
    ?>
</body>
</html>