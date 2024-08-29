<?php
class Departamento
{
    private $codigo;
    private $nome;
    private $funcionarios = [];

    public function __construct($codigo, $nome)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
    }

    public function admitirFuncionario(Funcionario $funcionario)
    {
        $this->funcionarios[$funcionario->getCodigo()] = $funcionario;
    }

    public function listarFuncionarios()
    {
        foreach ($this->funcionarios as $funcionario) {
            echo "Código: " . $funcionario->getCodigo() . ", Nome: " . $funcionario->getNome() . ", Salário: " . $funcionario->getSalario() . "<br>";
        }
    }

    public function demitirFuncionario($codigo)
    {
        if (isset($this->funcionarios[$codigo])) {
            unset($this->funcionarios[$codigo]);
        } else {
            echo "Funcionário com código $codigo não encontrado.<br>";
        }
    }

    public function calcularCustoFolhaPagamento($diasUteis)
    {
        $custoTotal = 0;
        foreach ($this->funcionarios as $funcionario) {
            $custoTotal += $funcionario->calcularSalario($diasUteis);
        }
        return $custoTotal;
    }

    public function mostrarDados()
    {
        echo "Departamento Código: " . $this->codigo . ", Nome: " . $this->nome . "<br>";
        echo "Funcionários:<br>";
        $this->listarFuncionarios();
    }
}
?>
