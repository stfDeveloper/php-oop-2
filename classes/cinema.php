<?php 
class cinema{
    public $nomeCinema;
    public $indirizzo;
    public $telefono;
    public $totSale;
    // private $dipendenti;
    // private $prenotazioni;


    public function __construct($_nomeCinema,$_indirizzo,$_telefono){
        $this->nomeCinema = $_nomeCinema;
        $this->indirizzo = $_indirizzo;
        $this->telefono = $_telefono;
    }
    public function getDataCinema(){
        return [$this->nomeCinema,$this->indirizzo,$this->telefono];
    }
}
?>

