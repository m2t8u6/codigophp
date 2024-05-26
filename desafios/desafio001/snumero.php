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
        <h1>Resultado final</h1>
        <p>
            <?php
                $numero = $_REQUEST["numero"] ?? 0;
                $numeroAnterior = $numero - 1;
                $numeroSeguinte = $numero + 1;
                echo "O número escolhido foi <strong>$numero</strong><br>";
                echo "O núumero anterior a este é <em>$numeroAnterior</em><br>";
                echo "O número seguinte a este é <em>$numeroSeguinte</em><br><br>";
            ?>
        </p>

        <button onclick="history.back()">Voltar</button>
    </main>

</body>

</html>