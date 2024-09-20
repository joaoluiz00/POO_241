<?php
require_once 'LeiDeEntrega.php';

class LeiDeEntregaReal implements LeiDeEntrega
{
    public function deveEntregarUrgente(NotaFiscal $nf)
    {
        // Exemplo de regra: entrega urgente se valor da nota fiscal for maior que 1000
        return $nf->getValor() > 1000;
    }
}
