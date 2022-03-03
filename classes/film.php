<?php 
class Film{
    private $titolo;
    private $genere;
    public $durata;
    private $attori;

    public function __construct($_titolo,$_genere,$_durata, $_attori = []){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->attori = $_attori;
    }
    public function newAttore($_attore){
        $this->attori[] = $_attore;
    }
    public function setAttore($_attori){
        $this->attori = $_attori;
    }
   
}

?>