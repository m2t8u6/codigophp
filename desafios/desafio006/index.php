<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>

<body>
    
    <main>
        <h1>Anatomia da divisão</h1>
        
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=isset($_GET['dividendo']) ? $_GET['dividendo'] : '' ?>" required>

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=isset($_GET['divisor']) ? $_GET['divisor'] : '' ?>" required>

            <input type="submit" value="Analise">
        </form>
    </main>

    <section>
        <?php

            if (isset($_GET['dividendo']) && isset($_GET['divisor']))
            {
                $dividendo = $_GET['dividendo'];
                $divisor = $_GET['divisor'];
                
                if ($divisor != 0)
                {
                    $quociente = $dividendo / $divisor;
                    $resto = $dividendo % $divisor;

                    echo "<p>Dividendo = $dividendo <br> Divisor = $divisor <br> Quociente = $quociente <br> Resto = $resto <br></p>";
                }
                else
                {
                    echo "<p>Não é possivel dividir por 0.</p>";
                }
            }
        ?>
    </section>

</body>

</html>