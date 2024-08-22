<?php

$saldo = 0;
main();

function main()
{
    global $saldo;

    while (true) {
        echo "Digite uma opção:\n";
        echo "1 - Depositar\n";
        echo "2 - Sacar\n";
        echo "3 - Consultar saldo\n";
        echo "0 - Sair\n";
        echo "Opção: ";
        $opcao = intval(trim(fgets(STDIN)));

        if ($opcao == 0) {
            break;
        }

        switch ($opcao) {
            case 1:
                echo "Digite a quantidade a depositar: ";
                $quantidade = intval(trim(fgets(STDIN)));
                depositar($quantidade);
                break;
            case 2:
                echo "Digite a quantidade a sacar: ";
                $quantidade = intval(trim(fgets(STDIN)));
                sacar($quantidade);
                break;
            case 3:
                consultar();
                break;
            default:
                echo "Opção inválida.\n";
                break;
        }
    }
    echo "Saldo final: $saldo\n";
}

function depositar($quantidade)
{
    global $saldo;
    $saldo += $quantidade;
    echo "Depósito realizado. Saldo atual: $saldo\n";
}

function sacar($quantidade)
{
    global $saldo;
    if ($quantidade > $saldo) {
        echo "Saldo insuficiente para saque.\n";
    } else {
        $saldo -= $quantidade;
        echo "Saque realizado. Saldo atual: $saldo\n";
    }
}

function consultar()
{
    global $saldo;
    echo "Saldo atual: $saldo\n";
}
?>