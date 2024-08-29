<?php

require_once "ContaCorrente.php";
require_once "Poupanca.php";

$c = new ContaCorrente(1000, 500);
$p = new Poupanca(5000);

echo "Saldo inicial da Conta Corrente: " . $c->getSaldo() . "<br>";
echo "Saldo inicial da Poupança: " . $p->getSaldo() . "<br>";

$c->depositar(200);
$p->depositar(1000);
echo "Depósitos realizados<br>";

$c->sacar(300);
$p->sacar(500);
echo "Saques realizados<br>";

echo "Exibindo Extrato da Conta Corrente: <br>" . $c->gerarExtrato() . "<br>";

echo  $p->gerarRendimento(0.05) . "<br>";


echo "Saldo da Conta Corrente após operações: " . $c->getSaldo() . "<br>";
echo "Saldo da Poupança após operações: " . $p->getSaldo() . "<br>";
