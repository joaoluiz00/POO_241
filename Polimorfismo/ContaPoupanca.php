<?php
class ContaPoupanca extends conta
{

    public function __construct($agencia, $conta, $saldo)
    {
        parent::__construct($agencia, $conta, $saldo);
    }

    public function Retirar($quantia)
    {
        if ($this->saldo >= $quantia)
        {
            $this->saldo -= $quantia;
            return true;
        }
        else
            return false;
    }
}