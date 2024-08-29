<?php

require_once 'TributavelInterface.php';

class SeguroDeVida implements TributavelInterface {
    public function calculaTributos(): float {
        return 75.00;
    }
}

?>
