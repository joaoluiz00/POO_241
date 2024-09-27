<?php
class CalculadorDeImposto
{
    public function calcular(NotaFiscal $nf)
    {
        return $nf->getValor() * 0.1;
    }
}
