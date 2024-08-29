<?php  
require_once 'OrcavelInterface.php';
require_once 'Servico.php';
require_once 'Produto.php';
require_once 'Orcamento.php';

// instância de objeto Orcamento  

$orc = new Orcamento();  
$orc->adiciona(new Produto('Teclado', 10, 200),2);  
$orc->adiciona(new Produto('Impressora', 15, 500),2);  
$orc->adiciona(new Produto('Monitor', 200, 900),1);  

$orc->adiciona(new Servico('Formatação', 200),1);
$orc->adiciona(new Servico('Instalação', 100),1);  

echo 'Total R$ ' . $orc->calculTotal();
?>