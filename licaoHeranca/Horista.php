<?php
require_once 'Funcionario.php';

class Horista extends Funcionario
{
    private $qtdeHorasSemana;

    public function __construct($codigo, $nome, $salario, $qtdeHorasSemana)
    {
        parent::__construct($codigo, $nome, $salario);
        $this->qtdeHorasSemana = $qtdeHorasSemana;
    }

    public function getQtdeHorasSemana()
    {
        return $this->qtdeHorasSemana;
    }
}
?>