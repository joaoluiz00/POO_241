<?php
require_once "fabricante.php";
require_once "produto.php";



$fabricante = new Fabricante('Mauricio D.Souza', 'Brasil','RG');

$produto = new Produto('Revista do Chico Bento',20,7.99);


$produto->setFabricante($fabricante);

echo"Descricao:".$produto->getDescricao()."<br>";
echo"Estoque:".$produto->getEstoque()."<br>";
echo"Preco:".$produto->getPreco()."<br>";
echo "Fabricante: ".$produto->getFabricante()->getNome()."<br>";


echo'<pre>';
var_dump($produto);
var_dump($fabricante);
echo'<pre>';

?>