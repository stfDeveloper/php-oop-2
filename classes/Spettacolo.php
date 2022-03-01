<?php 
class Spettacolo{
    private $data;
    private $nrSalaRiproduzione;
    private $durata;
    private $attori;

    public function __construct($_data,$_nrSalaRiproduzione,$_durata,$_attori){
        $this->data = $_data;
        $this->nrSalaRiproduzione = $_nrSalaRiproduzione;
        $this->durata = $_durata;
        $this->attori = $_attori;
    }
    public function getDataSpettacolo(){
        return [$this->data,$this->nrSalaRiproduzione,$this->durata,$this->attori];
    }
}


?>