<?php
class CalculadorDeImposto
{
    public function calcular(NotaFiscal $nf)
    {
        // Exemplo simples de cálculo: 10% do valor da Nota Fiscal
        return $nf->getValor() * 0.1;
    }
}
