<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor</title>
</head>

<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>

        <?php
            $reais = $_GET['valor'];
            $dolar = $reais / 5.11;
            $dolarFormatado = number_format($dolar, 2, ',', '.');
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            #echo "Seus R\$ " . number_format($reais, 2, ',', '.') . " equivalem a US\$ $dolarFormatado <br>";
            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
            echo "Cotação fixa de 5,11 informada diretamente no codigo.";
        ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>