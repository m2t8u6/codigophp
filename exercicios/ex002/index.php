<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // data padrão da area (horario de São Paulo), a time zone de são paulo é GMT-3.
        echo "Hoje é dia " . date("d/M/Y"); // impra na tela "Hoje é dia " junto com o resultado da função date que retorna o dia, o mes e o ano.
        echo " e a hora atual é " . date("G:i:s T"); // mostra a hora o mes e os segundo de São Paulo (GMT-3), "T" mostra qual a zona de referencia.
    ?>
</body>
</html>