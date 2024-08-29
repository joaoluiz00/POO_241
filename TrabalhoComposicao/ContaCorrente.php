<?php

class ContaCorrente {
    private $saldo;
    private $limite;
    private $transacoes;

    public function __construct($saldo, $limite) {
        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->transacoes = [];
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        $this->transacoes[] = "+ Deposito: $valor";
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo + $this->limite) {
            $this->saldo -= $valor;
            $this->transacoes[] = "- Saque: $valor";
            return true;
        } else {
            return false;
        }
    }

    public function gerarExtrato() {
        $extrato = "Extrato da Conta Corrente:<br>";
        foreach ($this->transacoes as $transacao) {
            $extrato .= $transacao . "<br>";
        }
        $extrato .= "Saldo: {$this->saldo}";
        return $extrato;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    
}
