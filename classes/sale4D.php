<?php 

require_once __DIR__.'/Sale.php';

class Sala4D extends Sala {
    public $fumo;
    public $poltronaImmersiva;
    public $acqua;

    public function __construct($_nrSala,$_nrPosti,$_fumo,$_poltronaImmersiva,$_acqua)
    {
        parent::__construct($_nrSala,$_nrPosti);
        $this->fumo = $_fumo;
        $this->poltronaImmersiva = $_poltronaImmersiva;
        $this->acqua = $_acqua;
    }
}



?>