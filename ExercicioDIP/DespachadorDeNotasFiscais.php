<?php
require_once 'CalculadorDeImposto.php';
require_once 'NFDao.php';
require_once 'EntregadorDeNFs.php';

class DespachadorDeNotasFiscais
{
    private NFDao $dao;
    private CalculadorDeImposto $impostos;
    private EntregadorDeNFs $entregador;

    public function __construct(NFDao $dao, CalculadorDeImposto $impostos, EntregadorDeNFs $entregador)
    {
        $this->dao = $dao;
        $this->impostos = $impostos;
        $this->entregador = $entregador;
    }

    public function processa(NotaFiscal $nf)
    {
        // Calcula o imposto usando o método da classe CalculadorDeImposto
        $imposto = $this->impostos->calcular($nf);
        $nf->setImposto($imposto);

        // Entrega a nota fiscal usando a classe EntregadorDeNFs
        $this->entregador->entregar($nf);

        // Persiste a nota fiscal usando o método da classe NFDao
        $this->dao->persiste($nf);
    }
}
