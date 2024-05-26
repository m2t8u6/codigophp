<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>

<body>
    <?php
        $reais = $_GET['valor'] ?? 0;
        $dolar = $reais / 5.11;
    ?>

    <main>
        <h1>Conversor de moedas v1.0</h1>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Quanto você tem na carteira?</label>
            <input type="text" name="valor" value="<?=$reais?>">
            <input type="submit" value="Converter">
        </form>

        <?php
            if($reais != 0)
            {
                $dolarFormatado = number_format($dolar, 2, ',', '.');
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
                echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br></p>";
                echo "<strong>Cotação fixa de 5,11</strong> informada diretamente no codigo.";
            }
        ?>
    </main>
</body>

</html>