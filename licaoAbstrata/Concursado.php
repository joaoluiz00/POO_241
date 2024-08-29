<?php
require_once "Funcionario.php";

class Concursado extends Funcionario
{
    public function calcularSalario($diasUteis)
    {
        return ($this->salario / 30) * $diasUteis;
    }
}
?>
