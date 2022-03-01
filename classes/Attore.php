<?php
class Attore{
    private $nome;
    private $cognome;
    private $anno;

    public function __construct($nome,$_cognome,$_anno){
        $this->nome = $nome;
        $this->cognome = $_cognome;
        $this->anno = $_anno;
    }
    public function getDataAttore(){
        return [$this->nome,$this->cognome,$this->anno];
    }
}

?>