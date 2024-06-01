<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste</title>
</head>

<body>
    <main>
        <h1>Reajuste de preços</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="produto">Preço do produto (R$)</label>
            <input type="text" name="produto" id="idproduto" value="<?=isset($_GET['produto'])?>" required>

            <label for="reajuste">Qual será o preço de reajuste?</label>
            <input type="text" name="reajuste" id="idreajuste" value="<?=isset($_GET['reajuste'])?>" required>

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <?php
            if (( isset($_GET['produto']) && is_numeric($_GET['produto']) ) && ( isset($_GET['reajuste']) && is_numeric($_GET['reajuste']) ))
            {
                $precoProduto = $_GET['produto'];
                $porcentagem = $_GET['reajuste'];
                $reajuste = $precoProduto * ($porcentagem / 100);
                $novoPreco = $precoProduto + $reajuste;

                echo "<p>O produto custava $precoProduto, com <strong>$porcentagem% de aumento</strong> vai passar a custar <strorng>$novoPreco</strong> apartir de agora.</p>";
            }
        ?>
    </section>
</body>

</html>