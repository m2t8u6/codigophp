<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Resultado</h1>

        <p>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");

                // URL da API que retorna um formato json
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                
                // A função 'json_decode' trata dados em json
                // A função 'file_get_content()' obtem dados de uma URL
                $dados = json_decode(file_get_contents($url), true);

                #var_dump($dados);

                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $numero = $_GET["valor"] ?? 0;
                $valorFormatado = $numero / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "O valor " . numfmt_format_currency($padrao, $numero, "BRL") . " convertido é " . numfmt_format_currency($padrao, $valorFormatado, "USD");
            ?>
        </p>

        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>