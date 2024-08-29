<?php
require_once 'Funcionario.php';

class Mensalista extends Funcionario
{
    private $qtdeHorasTrabalhadas;

    public function __construct($codigo, $nome, $salario, $qtdeHorasTrabalhadas)
    {
        parent::__construct($codigo, $nome, $salario);
        $this->qtdeHorasTrabalhadas = $qtdeHorasTrabalhadas;
    }

    public function getQtdeHorasTrabalhadas()
    {
        return $this->qtdeHorasTrabalhadas;
    }
}
?>