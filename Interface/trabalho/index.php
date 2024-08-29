<?php

require_once 'ContaCorrente.php';
require_once 'SeguroDeVida.php';
require_once 'TotalizadorDeTributos.php';

$contaCorrente = new ContaCorrente(1000.00); // Saldo de 1000 reais
$seguroDeVida = new SeguroDeVida();

$totalizador = new TotalizadorDeTributos();

$totalizador->adiciona($contaCorrente);
$totalizador->adiciona($seguroDeVida);

echo "Tributos Conta Corrente: " . $contaCorrente->calculaTributos() . " reais\n";
echo "\nTributos Seguro de Vida: " . $seguroDeVida->calculaTributos() . " reais\n";
echo "\nTotal de Tributos Acumulados: " . $totalizador->getTotal() . " reais\n";

?>
