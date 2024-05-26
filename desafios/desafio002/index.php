<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Números Aleatórios</title>
</head>

<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando número aleatório entre 0 e 100...</p>

        <p>
            <?php
                if (isset($_GET['gerar'])) 
                {
                    $numero = mt_rand(0, 100);
                    echo "Número gerado: $numero";
                }
            ?>
        </p>

        <form method="get">
            <button type="submit" name="gerar">Gerar Número</button>
        </form>
    </main>
</body>

</html>
