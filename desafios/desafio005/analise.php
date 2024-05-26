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
        <?php
            $numero = $_POST["num"] ?? 0;

            echo "<p>Analise do número <strong>" . number_format($numero, 3, ",", ".") . "</strong></p>";

            $int = (int) $numero;
            $fra = $numero - $int;

            echo "<ul><li>A parte inteira do número é: " . number_format($int, 0, ",", ".") . "</li><li>A parte fracionada do número é: <strong>" . number_format($fra, 3, ",", "."). "</strong></li></ul>";
        ?>

        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>