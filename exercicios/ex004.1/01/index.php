<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritimeticas</title>
</head>
<body>
    <header>
        <h1>Operações aritimeticas</h1>
    </header>
    <main>
        <p>A ordem de precedência em PHP é:</p>
        <ol>
            <li>Parentese - ()</li>
            <li>Potência -> **</li>
            <li>Multiplicação, divisão e resto de divisão -> *, / e %</li>
            <li>Adição e subtração -> + e -</li>
        </ol>
        <?php
            $resultado = 5 + 3 * 4 ** 2; # 5 +, 3 *, 4 elevado a 2

            echo "O resultado é: $resultado";
        ?>
    </main>
</body>
</html>