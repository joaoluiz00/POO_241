<?php 
namespace app;

class Calculadora {
    private array $operacoes = []; // Inicializando o array para evitar erros

    public function getOperacoes() {
        return $this->operacoes;
    }

    public function soma($a, $b) {
        $resultado = $a + $b;
        $this->operacoes[] = "soma"; // Registrando a operação
        return $resultado;
    }

    public function subtrair($a, $b) {
        $resultado = $a - $b;
        $this->operacoes[] = "subtracao"; // Registrando a operação
        return $resultado;
    }

    public function multiplicar($a, $b) {
        $resultado = $a * $b;
        $this->operacoes[] = "multiplicacao"; // Registrando a operação
        return $resultado;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não permitida.");
        }
        $resultado = $a / $b;
        $this->operacoes[] = "divisao"; // Registrando a operação
        return $resultado;
    }
}
?>
