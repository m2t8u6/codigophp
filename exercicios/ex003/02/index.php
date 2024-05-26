<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis parte 2</title>
</head>
<body>
    <?php
        #A função "var_dump()" mostrara algumas informações da variavel.
        $valor = 300;
        $nome = "Matheus";
        $existe = true;
        
        #var_dump($valor);
        #var_dump($nome);
        #var_dump($existe);

        #$numero = (int)"5";
        #var_dump($numero);

        $vet = [6, 3.1415, "Roberto", 43, false];
        var_dump($vet);
    ?>
</body>
</html>