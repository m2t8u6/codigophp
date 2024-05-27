<?php
    
    function scanPorts($host, $startPort, $endPort, $timeout = 1)
    {
        $openPorts = [];
        
        for ($port = $startPort; $port <= $endPort; $port++)
        {
            echo "Verificando a porta $port...\n";
            
            $connection = @fsockopen($host, $port, $errno, $errstr, $timeout);
            
            if (is_resource($connection))
            {
                $openPorts[] = $port;
                echo "Porta $port está aberta.\n";
                fclose($connection);
            }
            else
            {
                echo "Porta $port está fechada ou inacessível: $errstr ($errno)\n";
            }
        }

        return $openPorts;
    }

    
    $host = readline("Digite o site ou endereço IP a ser escaneado: ");
    $startPort = (int)readline("Digite a porta inicial do escaneamento: ");
    $endPort = (int)readline("Digite a porta final do escaneamento: ");

    echo "Escaneando $host de $startPort a $endPort...\n"; // Mensagem de depuração
    $openPorts = scanPorts($host, $startPort, $endPort);

    if (count($openPorts) > 0)
    {
        echo "Portas abertas em $host:\n";
        
        foreach ($openPorts as $port)
        {
            echo "Porta $port está aberta.\n";
        }
    }
    else
    {
        echo "Nenhuma porta aberta encontrada em $host no intervalo de portas $startPort-$endPort.\n";
    }
?>
