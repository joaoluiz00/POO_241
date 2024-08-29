<?php

class TotalizadorDeTributos {
    private $total = 0.0;

    public function adiciona(TributavelInterface $ti): void {
        $this->total += $ti->calculaTributos();
    }

    public function getTotal(): float {
        return $this->total;
    }
}

?>
