<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE • Conversor de Moedas</h1>

        <?php
        $cotacao = 5.40;
        $reais = $_GET['reais'] ?? 0;
        $reais = (float)$reais;


        $dolar = $reais / $cotacao;

        $reaisFormatado = number_format($reais, 2, ',', '.');
        $dolarFormatado = number_format($dolares, 2, '.', ',');

          echo "<h2>R$ $reaisFormatado valem US$ $dolarFormatado</h2>";
        ?>

        <br>
      
    </main>

</body>

</html>