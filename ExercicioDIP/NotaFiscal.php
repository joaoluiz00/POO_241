<?php
class NotaFiscal
{
    private $valor;
    private $imposto;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setImposto($imposto)
    {
        $this->imposto = $imposto;
    }

    public function getImposto()
    {
        return $this->imposto;
    }
}
