<?php
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

function realizarSaque(Conta $conta, $valor) {
    $conta->sacar($valor);
    echo "Novo saldo: " . $conta->getSaldo() . "\n";
}

// Teste com ContaCorrente
$contaCorrente = new ContaCorrente(1000);
realizarSaque($contaCorrente, 200); // Novo saldo: 800

// Teste com ContaPoupanca
$contaPoupanca = new ContaPoupanca(500);
realizarSaque($contaPoupanca, 100); // Novo saldo: 400
?>
