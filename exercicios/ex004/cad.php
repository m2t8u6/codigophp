<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do procesamento</h1>
    </header>
    <main>
        <?php
            #REQUEST é uma variavel super global que junta $_get $_POST $_COOKIES
            #var_dump($_REQUEST);
            #var_dump($_POST);
            #var_dump($_GET);

            $nome = $_GET["nome"] ?? "sem nome"; #Operador de coalescência nula, na linha atual o que acontece é: se tiver valor em "nome" ele recebe nome, se não ele recebe o que esta depois do operador de coalescência nula entre aspas.
            $sobrenome = $_GET["sobrenome"] ?? "sem sobre nome";

            echo "<p>Olá, $nome $sobrenome, como vai?</p>";
        ?>
        <a href="./index.html" target="_self">Volte para o site principal.</a>
    </main>
</body>

</html>