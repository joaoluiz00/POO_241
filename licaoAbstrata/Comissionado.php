<?php
require_once "Funcionario.php";

class Comissionado extends Funcionario
{
    private $percentualComissao;

    public function __construct($codigo, $nome, $salario, $percentualComissao = 0.20)
    {
        parent::__construct($codigo, $nome, $salario);
        $this->percentualComissao = $percentualComissao;
    }

    public function setPercentualComissao($percentualComissao)
    {
        $this->percentualComissao = $percentualComissao;
    }

    public function getPercentualComissao()
    {
        return $this->percentualComissao;
    }

    public function calcularSalario($diasUteis)
    {
        return (($this->salario / 30) * $diasUteis * $this->percentualComissao) + $this->salario;
    }
}
?>
