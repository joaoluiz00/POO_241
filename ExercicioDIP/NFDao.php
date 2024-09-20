<?php
class NFDao
{
    public function persiste(NotaFiscal $nf)
    {
        echo "Nota Fiscal com valor " . $nf->getValor() . " e imposto " . $nf->getImposto() . " persistida no banco de dados.\n";
    }
}
