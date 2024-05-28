<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes</title>
</head>

<body>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="idnumero" value="<?= isset($_GET['numero']) ? $_GET['numero'] : '' ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
            if (isset($_GET['numero']) && is_numeric($_GET['numero']))
            {
                $numero = $_GET['numero'];
                $raizQuadrada = sqrt($numero);
                $raizCubica = pow($numero, 1/3);

                echo "<p>Análisando o número $numero: </p><ul><li>A raiz quadrada de $numero é de: $raizQuadrada</li><li>A raiz cubica é de: $raizCubica</li></ul>";
            }
            elseif (isset($_GET['numero']))
            {
                echo "<p>Insira um valor valido.</p>";
            }
        ?>
    </section>
</body>

</html>