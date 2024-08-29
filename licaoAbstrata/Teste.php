<?php
require_once "Concursado.php";
require_once "Comissionado.php";
require_once "Departamento.php";


$funcionario1 = new Concursado(1, "João", 3000);
$funcionario2 = new Concursado(2, "Maria", 3200);
$funcionario3 = new Comissionado(3, "Carlos", 2500);
$funcionario4 = new Comissionado(4, "Ana", 2700, 0.25); 

$departamento = new Departamento(101, "Tecnologia");
$departamento->admitirFuncionario($funcionario1);
$departamento->admitirFuncionario($funcionario2);
$departamento->admitirFuncionario($funcionario3);
$departamento->admitirFuncionario($funcionario4);

echo "<h3>Dados do Departamento</h3>";
$departamento->mostrarDados();

$diasUteis = 22;
$custoFolha = $departamento->calcularCustoFolhaPagamento($diasUteis);
echo "<h3>Custo Total com a Folha de Pagamento</h3>";
echo "Custo total: R$ " . $custoFolha . "<br>";

echo "<h3>Funcionários do Departamento de Tecnologia</h3>";
$departamento->listarFuncionarios();

$diasUteis = 22;
$custoFolha = $departamento->calcularCustoFolhaPagamento($diasUteis);
echo "<h3>Custo Total com a Folha de Pagamento</h3>";
echo "Custo total: R$ " . $custoFolha . "<br>";

$departamento->demitirFuncionario(3);

echo "<h3>Funcionários do Departamento de Tecnologia após a Demissão</h3>";
$departamento->listarFuncionarios();

$custoFolha = $departamento->calcularCustoFolhaPagamento($diasUteis);
echo "<h3>Custo Total com a Folha de Pagamento após a Demissão</h3>";
echo "Custo total: R$ " . $custoFolha . "<br>";
?>
