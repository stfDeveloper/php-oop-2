<?php 
class Sala{
    protected $nrSala;
    protected $nrPosti;

    public function __construct($_nrSala,$_nrPosti){
        $this->nrSala = $_nrSala;
        $this->nrPosti = $_nrPosti;
    }
    public function getDataSala(){
        return [$this->nrSala,$this->nrPosti];
    }
}


?>