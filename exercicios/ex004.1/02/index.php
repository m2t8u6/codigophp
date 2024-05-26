<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritimeticas em PHP</title>
</head>
<body>
    <header>
        <h1>Funções aritimeticas em PHP</h1>
    </header>
    <main>
        <?php
            $r;
            #$r = abs(-2000);#valor absoluto "abs(valor)"
            #$r = base_convert(3256, 10, 16);#conversor de base "base_convert(valor, base antiga, base nova)"
            #bases de aredondamento: ceil(valor) arredonda para cima, floor(valor) arredonda para baixo, round(valor) arredondamento aritimetico;
            #função para calcular hipotenusa: hypot(tamanho de cateto1, tamanho de cateto2);
            #$r = intdiv(3, 2);#Para obter somente o quociente da divisão: intdiv();
            #$r = min(10, 80, 41, 3);#min() e max() mostrão o valo minimo e maximo de uma sequencia.
            #$r = pi();#para obter o valor de pi: pi() ou a constante que ja vem definida M_PI.
            #Funções para calcular, seno: "sin()", coseno "cos()", tangente "tan()", de um ângulo.
            #$r = sqrt(81);#Para descobrir a raiz quadrada de um numero sqrt(valor)
            echo "O resultado retornado da função é: $r";
        ?>
    </main>
</body>
</html>