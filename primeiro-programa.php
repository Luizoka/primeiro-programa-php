<?php
function main()
{
    $saldo = 0;

    while (true) {
        echo "\nEscolha uma opção:\n";
        echo "1 - Depositar\n";
        echo "2 - Sacar\n";
        echo "3 - Consultar saldo\n";
        echo "0 - Sair\n";
        echo "Opção: ";
        $opcao = intval(trim(fgets(STDIN)));

        if ($opcao == 0) {
            echo "Saindo...\n";
            break;
        }

        switch ($opcao) {
            case 1:
                $saldo = depositar($saldo);
                break;
            case 2:
                $saldo = sacar($saldo);
                break;
            case 3:
                consultar($saldo);
                break;
            default:
                echo "Opção inválida. Por favor, tente novamente.\n";
                break;
        }
    }

    echo "Saldo final: $saldo\n";
}

function depositar($saldo)
{
    echo "Digite a quantidade a depositar: ";
    $quantidade = intval(trim(fgets(STDIN)));

    if ($quantidade > 0) {
        $saldo += $quantidade;
        echo "Depósito realizado com sucesso. Saldo atual: $saldo\n";
    } else {
        echo "Valor inválido para depósito. Por favor, insira um valor positivo.\n";
    }

    return $saldo;
}

function sacar($saldo)
{
    echo "Digite a quantidade a sacar: ";
    $quantidade = intval(trim(fgets(STDIN)));

    if ($quantidade > 0) {
        if ($quantidade <= $saldo) {
            $saldo -= $quantidade;
            echo "Saque realizado com sucesso. Saldo atual: $saldo\n";
        } else {
            echo "Saldo insuficiente para saque. Saldo atual: $saldo\n";
        }
    } else {
        echo "Valor inválido para saque. Por favor, insira um valor positivo.\n";
    }

    return $saldo;
}

function consultar($saldo)
{
    echo "Seu saldo atual é: $saldo\n";
}

// Chama a função principal para iniciar o programa
main();

?>