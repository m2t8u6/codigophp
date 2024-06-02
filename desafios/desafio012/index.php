<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando tempo</title>
</head>

<body>
    <main>
        <h1>Calculadora de tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="tempo">Qual o tempo em segundos?</label>
            <input type="number" name="tempo" id="idtempo" value="<?= isset($_GET['tempo']) ? $_GET['tempo'] : '' ?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
            if (isset($_GET['tempo']) && is_numeric($_GET['tempo']))
            {
                
                $segundosIniciais = intval($_GET['tempo']);
                
                $semanas = intdiv($segundosIniciais, 604800);
                $resto = $segundosIniciais % 604800;

                $dias = intdiv($resto, 86400);
                $resto %= 86400;

                $horas = intdiv($resto, 3600);
                $resto %= 3600;

                $minutos = intdiv($resto, 60);
                $segundos = $resto % 60;

                echo "<h1>Totalizando tudo</h1>";
                echo "<p>Analizando o valor que você digitou, $segundosIniciais segundos equivalem a um total de:</p>";
                echo "<ul>
                        <li>Semanas = $semanas</li>
                        <li>Dias = $dias</li>
                        <li>Horas = $horas</li>
                        <li>Minutos = $minutos</li>
                        <li>Segundos = $segundos</li>
                      </ul>";
            }
        ?>
    </section>
</body>

</html>
