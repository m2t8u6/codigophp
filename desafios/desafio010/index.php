<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Idade</title>
</head>

<body>
    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nano">Em que ano você nasceu? </label>
            <input type="text" name="nano" id="idnano" value="<?=isset($_GET['nano']) ? $_GET['nano'] : '' ?>" required>
            
            <label for="anoa">Quer saber a sua idade em qual ano? (atualmente estamos em <?= date("Y")?>) </label>
            <input type="text" name="anoa" id="idanoa" value="<?= isset($_GET['anoa']) ? $_GET['anoa'] : '' ?>" required>

            <input type="submit" value="Qual séra minha idade?">
        </form>
    </main>

    <section>
        <?php 
            if((isset($_GET['nano']) && is_numeric($_GET['nano'])) && (isset($_GET['anoa']) && is_numeric($_GET['anoa'])))
            {
                $anoNacimento = $_GET['nano'];
                $anoIdade = $_GET['anoa'];
                $idade = $anoIdade - $anoNacimento;

                echo "<p>Quem nasceu em $anoNacimento vai ter <strong>$idade anos</strong> em $anoIdade</p>";
            }
        ?>
    </section>
</body>

</html>