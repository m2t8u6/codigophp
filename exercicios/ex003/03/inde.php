<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
</head>
<body>
    <h1>Concatenação, aspas simples, duplas e caracters de escape.</h1>
    <?php
        $nome = "Matheus";
        const ESTADO = "MG";

        #Na linha abaixo temos uma concatenação de strings e funções
        #echo "Olá, meu nome é: $nome " . ESTADO;
        #echo "O ano atual é " . date('Y');

        #Nas linhas abaixo vemos a diferença entre aspas simples e duoplas
        #echo 'esta é a logo do php: \u{1F418} ';
        #echo "esta é a logo do php: \u{1F418}";
    ?>
</body>
</html>