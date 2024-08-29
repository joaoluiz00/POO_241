<?php

require_once 'TributavelInterface.php';

class ContaCorrente implements TributavelInterface {
    private $saldo;

    public function __construct(float $saldo) {
        $this->saldo = $saldo;
    }

    public function calculaTributos(): float {
        return $this->saldo * 0.05;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}

?>
