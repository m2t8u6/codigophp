<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Variaveis em PHP</h1>
    <?php
        // Em PHP não é necessario dizer o tipo da variavel, mas das consts sim.
        $nome = "Matheus";
        $sobrenome = "G";
        const PAIS = "Brasil";

        echo "Olá, o meu nome é: $nome $sobrenome! você mora no " . PAIS;

        /*
            Regras para nomes indedificadores

            1 - Variaveis sempre começam com $.
            2 - O segundo caractere depois do identificador pode ser letra ou "_".
            3 - Caracteres aceitos [a-z], [A-Z], [0-9] e [_].
            4 - Aceita qualquer caractere da tabela ASCII a partir do codigo 128.
            5 - Aceita caracteres como á, õ, ç.
            6 - A linguagem é case sensitive em relação a nomes.
            7 - Nomes especiais como $this não podem ser usados.
        */
    ?>
</body>
</html>