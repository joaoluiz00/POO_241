<?php

class Poupanca {
    private $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false; 
        }
    }

    public function gerarRendimento($taxa) {
        $rendimento = $this->saldo * $taxa;
        $this->saldo += $rendimento;
        return "Rendimento gerado: " . $rendimento;
    }
    

    public function getSaldo() {
        return $this->saldo;
    }
}
