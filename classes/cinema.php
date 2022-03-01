<?php 
class Cinema{
    private $nomeCinema;
    private $indirizzo;
    private $telefono;
    private $totSale;
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

