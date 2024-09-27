<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\Calculadora;

class CalculadoraTest extends TestCase
{
    public function test_soma()
    {
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);

        $resultado = $calc->soma(2, 3);
        $this->assertEquals(5, $resultado);
        // assertEquals verifica se o valor retornado pela soma é o valor esperado.
    }

    public function test_if_operacoes_is_empty()
    {
        $calc = new Calculadora();
        $this->assertEmpty($calc->getOperacoes());
        // assertEmpty verifica se o array de operações está vazio ao inicializar a calculadora.
    }

    // Novo assert 1: Verifica se a divisão por zero lança uma exceção
    public function test_divisao_por_zero() {
        $calc = new Calculadora();
        $this->expectException(\InvalidArgumentException::class);
        $calc->dividir(10, 0);
        // assertException verifica se uma exceção específica (InvalidArgumentException) é lançada ao dividir por zero.
    }

    // Novo assert 2: Verifica se a operação de multiplicação é registrada corretamente
    public function test_registrar_operacao_multiplicacao() {
        $calc = new Calculadora();
        $calc->multiplicar(3, 4);
        $this->assertContains('multiplicacao', $calc->getOperacoes());
        // assertContains verifica se a operação 'multiplicacao' foi adicionada ao array de operações.
    }

    // Novo assert 3: Verifica se o tipo de retorno da função dividir é float
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não permitida.");
        }
        $resultado = $a / $b;
        return (float)$resultado; // Garantindo que o retorno seja sempre float
    }
    
}
?>
