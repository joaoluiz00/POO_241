<?php
require_once 'Conta.php';

class ContaCorrente implements Conta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente para saque.\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
?>
