<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario minimo</title>
</head>

<body>

    <main>
        <h1>Informe seu salário</h1>
        
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="idsalario" value="<?= isset($_GET['salario']) ? $_GET['salario'] : '' ?>" required>
            <input type="submit" value="Calcular">
        </form>

    </main>
    
    <section>
        <?php
            $salarioMinimo = 1380.00;
            $padraoMoeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            if (isset($_GET['salario'])) {
                $salarioRecebido = floatval($_GET['salario']); // Converte o valor para float

                $quantSalarioMinimo = floor($salarioRecebido / $salarioMinimo); // Calcula a quantidade de salários mínimos
                $sobra = $salarioRecebido % $salarioMinimo; // Calcula o restante

                echo "<p>Quem recebe o salário de " . numfmt_format_currency($padraoMoeda, $salarioRecebido, "BRL") . " ganha $quantSalarioMinimo salário(s) mínimo(s) + " . numfmt_format_currency($padraoMoeda, $sobra, "BRL") . ".</p>";
            }
        ?>
    </section>

</body>
</html>
