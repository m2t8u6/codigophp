<?php
    function scanPorts($host, $startPort, $endPort, $timeout = 1) {
        $openPorts = [];
        
        for ($port = $startPort; $port <= $endPort; $port++) {
            echo "Verificando a porta $port...\n"; // Mensagem de depuração
            $connection = @fsockopen($host, $port, $errno, $errstr, $timeout);
            if (is_resource($connection)) {
                $openPorts[] = $port;
                echo "Porta $port está aberta.\n"; // Mensagem de depuração
                fclose($connection);
            } else {
                echo "Porta $port está fechada ou inacessível: $errstr ($errno)\n"; // Mensagem de depuração
            }
        }

        return $openPorts;
    }

    // Solicitar ao usuário o host e a faixa de portas
    $host = readline("Digite o site ou endereço IP a ser escaneado: ");
    $startPort = (int)readline("Digite a porta inicial do escaneamento: ");
    $endPort = (int)readline("Digite a porta final do escaneamento: ");

    echo "Escaneando $host de $startPort a $endPort...\n"; // Mensagem de depuração
    $openPorts = scanPorts($host, $startPort, $endPort);

    if (count($openPorts) > 0) {
        echo "Portas abertas em $host:\n";
        foreach ($openPorts as $port) {
            echo "Porta $port está aberta.\n";
        }
    } else {
        echo "Nenhuma porta aberta encontrada em $host no intervalo de portas $startPort-$endPort.\n";
    }
?>
