<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>MSCODE - Calculadora de Dias</h1>
        <?php 

            const DIAS_ANO = 365;

            $idade = $_GET['idade'] ?? 0;
            $idade = (int)$idade;

            $dias_vivos = $idade * DIAS_ANO;

            echo"Você está vivo á " . number_format($dias_vivos, 0, ',', '.'). "dias";

            
        
        
        ?>
    </main>
</body>
</html>