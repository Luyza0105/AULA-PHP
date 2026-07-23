<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Relatório Financeiro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <?php
       
        const NOME_AGENCIA = 'AGENCIA_STAR_MEDIA';
                                                        

        $marcas = ["Simonetti", "Samsung", "Red Bull"];

       
        $totalInfluenciadores = (int)($_GET['influenciadores'] ?? 4);
        $receitaTotal        = (float)($_GET['receita'] ?? 10000.00);
        $taxaPorcentagem     = (float)($_GET['taxa'] ?? 20); 
        $taxaAgencia         = $taxaPorcentagem / 100;       
        $caixasBrindes       = (int)($_GET['brindes'] ?? 25);
        $notaCampanha        = (int)($_GET['nota'] ?? 5);


        $valorAgencia = $receitaTotal * $taxaAgencia;
        $valorPorInfluenciador = ($receitaTotal - $valorAgencia) / $totalInfluenciadores;

        $brindesPorInfluenciador = intdiv($caixasBrindes, $totalInfluenciadores);
        $brindesSobraAgencia     = $caixasBrindes % $totalInfluenciadores;

      
        $potencialViral = $notaCampanha ** 2;



       
        echo "<h1>" . "Relatório da agência: " . NOME_AGENCIA . "</h1>";

