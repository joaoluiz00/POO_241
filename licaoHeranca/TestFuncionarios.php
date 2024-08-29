<?php
require_once 'Mensalista.php';
require_once 'Horista.php';

$mensalista = new Mensalista(1, 'João Silva', 3000, 160);
echo '<pre>';
var_dump($mensalista);
echo '</pre>';
echo 'Mensalista: ' . $mensalista->getNome() . ', Salário: R$' . $mensalista->getSalario() . ', Horas Trabalhadas: ' . $mensalista->getQtdeHorasTrabalhadas() . '<br>';

$horista = new Horista(2, 'Maria Oliveira', 2000, 40);
echo '<pre>';
var_dump($horista);
echo '</pre>';
echo 'Horista: ' . $horista->getNome() . ', Salário: R$' . $horista->getSalario() . ', Horas Semanais: ' . $horista->getQtdeHorasSemana() . '<br>';
?>
