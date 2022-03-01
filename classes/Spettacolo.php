<?php 
class Spettacolo{
    private $nrSalaRiproduzione;
    private $data;
    private $orario;
    private $film;


    public function __construct($_nrSalaRiproduzione,$_data,$_orario,$_film){
        $this->nrSalaRiproduzione = $_nrSalaRiproduzione;
        $this->data = $_data;
        $this->orario = $_orario;
        $this->orario = $_film;
    }
    public function getDataSpettacolo(){
        return [$this->data,$this->nrSalaRiproduzione,$this->orario,$this->film];
    }
    public function film(){
        return $this->film;
    }
    public function data(){
        return $this->data;
    }
    //milestone 4
    public function orarioFine($_orario ){
        $this->orario =  
    }
}


?>