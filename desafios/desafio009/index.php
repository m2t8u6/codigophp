<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias aritimeticas</title>
</head>

<body>
    <main>
        <h1 style="color: purple;">Médias aritimeticas</h1>
        
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="1valor">1° valor</label>
            <input type="text" name="1valor" id="id1valor" value="<?= isset($_GET['1valor']) ? $_GET['1valor'] : '' ?>">

            <label for="1peso">1° peso</label>
            <input type="text" name="1peso" id="id1peso" value="<?= isset($_GET['1peso']) ? $_GET['1peso'] : '' ?>">

            <label for="1valor">2° valor</label>
            <input type="text" name="2valor" id="id2valor" value="<?= isset($_GET['2valor']) ? $_GET['2valor'] : '' ?>">

            <label for="2peso">2° peso</label>
            <input type="text" name="2peso" id="id2peso" value="<?= isset($_GET['2peso']) ? $_GET['2peso'] : '' ?>">

            <input type="submit" value="Cálcular medidas">
        </form>
    </main>

    <section>
        <?php
            // Aprenda a calcular media aritimetica simples e ponderada.
            
            if ( (isset($_GET['1valor']) && isset($_GET['2valor']) ) && (is_numeric($_GET['1valor']) && is_numeric($_GET['2valor'])) )
            {
                $valor1 = $_GET['1valor'];
                $peso1 = $_GET['1peso'];
                $valor2 = $_GET['2valor'];
                $peso2 = $_GET['2peso'];
            }
            elseif (isset($_GET['1valor']) && isset($_GET['2valor']))
            {
                echo "<p>Por favor insira um valort valido</p>";
            }
        ?>
    </section>
</body>

</html>