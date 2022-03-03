<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__.'/classes/Cinema.php';
require_once __DIR__.'/classes/Sale.php';
require_once __DIR__.'/classes/Sale4D.php';
require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Attore.php';
require_once __DIR__.'/classes/Spettacolo.php';


$Cinema = [
    new Cinema("The Space Cinema","Salita Michelangelo Garove 24 10144 Torino TO","011 481 1221")
];

$listaAttori = [];
$listaAttori[] = new Attore ("Mario","Rossi",1988);
$listaAttori[] = new Attore ("Luca","Rossi",1985);
$listaAttori[] = new Attore ("pinco","pallino",2010);
$listaAttori[] = new Attore ("Jhon","Jhonny",1969);
$listaAttori[] = new Attore ("Daniel","White",1982);
$listaAttori[] = new Attore ("Antonio","Black",1970);
var_dump($listaAttori);




$listaFilm = [
    new Film ("nomeFilm1","horror",115,[$listaAttori[0],$listaAttori[1],$listaAttori[2]]),
    new Film ("nomeFilm2","comico",180,[$listaAttori[3],$listaAttori[4],$listaAttori[5]]),
    new Film ("nomeFilm3","thriller", 145 ,[$listaAttori[5],$listaAttori[0],$listaAttori[1]]),
    new Film ("nomeFilm4","drammatico", 145 ,[$listaAttori[5],$listaAttori[0],$listaAttori[1]]),
    new Film ("nomeFilm5","azione", 145 ,[$listaAttori[2],$listaAttori[3],$listaAttori[4]]),
    new Film ("nomeFilm6","fantasy", 145 ,[$listaAttori[5],$listaAttori[2],$listaAttori[4]]),
    new Film ("nomeFilm7","horror", 145 ,[$listaAttori[2],$listaAttori[4],$listaAttori[1]]),
];
var_dump($listaFilm);





$saleLista = [
    new Sala (1, 60),
    new Sala (2, 60),
    new Sala (3, 60),
    new Sala (4, 80),
    new Sala4D (5, 90,true,false,false), 
    new Sala4D (6, 90,true,true,false),
    new Sala4D (7, 100,true,true,true), 
];

// milestone 1
var_dump($saleLista);


//milestone 4

$fineFilm = time($Spettacolo->orario) - ($Film->durata);
var_dump($fineFilm);

$spettacoli = [];
$spettacoli[] = new Spettacolo ($saleLista[0],"2/3/2022","14:00",$listaFilm[0]);
$spettacoli[] = new Spettacolo ($saleLista[1],"2/3/2022","16:10",$listaFilm[1]);
$spettacoli[] = new Spettacolo ($saleLista[2],"3/3/2022","14:00",$listaFilm[2]);
$spettacoli[] = new Spettacolo ($saleLista[3],"3/3/2022","17:15",$listaFilm[3]);
$spettacoli[] = new Spettacolo ($saleLista[4],"4/3/2022","14:00",$listaFilm[4]);
$spettacoli[] = new Spettacolo ($saleLista[5],"4/3/2022","16:40",$listaFilm[5]);
$spettacoli[] = new Spettacolo ($saleLista[6],"5/3/2022","14:00",$listaFilm[6]);
var_dump($spettacoli);





?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cinema</title>
    </head>
    <body>
       
        <?php
            foreach($Cinema as $elemento){
                [$nomeCinema, $indirizzo, $telefono] = $elemento->getDataCinema();
                echo "<div>
                <h3>
                {$nomeCinema}
                </h3>
                <p>
                Indirizzo : {$indirizzo}
                </p>
                <p>
                Prenota ora:{$telefono}
                </p>
                </div>";
            }

            // milestone 2
            $capienzaTotale = 0;
            foreach ($saleLista as $totale){
                $capienzaTotale =  $capienzaTotale + $totale->totale();
                
            }
            //milestone 3
            $proiezioni = 0;
            foreach ($spettacoli as $proiettato){
                if ($proiettato->film()==$listaFilm[0] && $proiettato->data()=="2/3/2022"){
                    $proiezioni++;
                }
            }
            //milestone 4
            $giorno = "03.03.2022";
            foreach ($spettacoli as $element) {
                $time ="";
                if(($element->data() == $giorno) && $element->data() >$time){
                    $time=$element->data();
                }
            }
        ?>
            
</body>
</html>