<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa eletrônico</title>
</head>

<body>
    <main>
        <h1>Caixa eletrônico</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="idsaque" value="<?= isset($_GET['saque']) ? $_GET['saque'] : '' ?>" required>
            <p>*Notas disponíveis: 100, 50, 10 e 5.</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php
            if (isset($_GET['saque']) && is_numeric($_GET['saque']))
            {
                $valorTotal = intval($_GET['saque']);
                
                if ($valorTotal > 0)
                {
                    $notas100 = intdiv($valorTotal, 100);
                    $valorTotal %= 100;
                    
                    $notas50 = intdiv($valorTotal, 50);
                    $valorTotal %= 50;
                    
                    $notas10 = intdiv($valorTotal, 10);
                    $valorTotal %= 10;
                    
                    $notas5 = intdiv($valorTotal, 5);
                    $valorTotal %= 5;

                    echo "<p>Quantidade de notas:</p>";
                    echo "<ul>";
                    echo "<li><img src='imagens/100.jpeg' alt='Nota de 100' style='width:50px;height:auto;'> Notas de 100: $notas100</li>";
                    echo "<li><img src='imagens/50.jpeg' alt='Nota de 50' style='width:50px;height:auto;'> Notas de 50: $notas50</li>";
                    echo "<li><img src='imagens/10.jpeg' alt='Nota de 10' style='width:50px;height:auto;'> Notas de 10: $notas10</li>";
                    echo "<li><img src='imagens/5.jpeg' alt='Nota de 5' style='width:50px;height:auto;'> Notas de 5: $notas5</li>";
                    echo "</ul>";

                    if ($valorTotal > 0)
                    {
                        echo "<p>O valor restante de R$$valorTotal não pode ser sacado com as notas disponíveis.</p>";
                    }
                }
                else
                {
                    echo "<p>Por favor, insira um valor maior que zero.</p>";
                }
            }
            else if (isset($_GET['saque']))
            {
                echo "<p>Por favor, insira um valor numérico válido.</p>";
            }
        ?>
    </section>
</body>
</html>
