<?php
require_once 'Correios.php';

class CorreiosReal implements Correios
{
    public function enviaPorSedex10(NotaFiscal $nf)
    {
        echo "Enviando a Nota Fiscal " . $nf->getValor() . " por SEDEX 10.\n";
    }

    public function enviaPorSedexComum(NotaFiscal $nf)
    {
        echo "Enviando a Nota Fiscal " . $nf->getValor() . " por SEDEX Comum.\n";
    }
}
