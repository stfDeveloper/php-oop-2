<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__.'/classes/Cinema.php';
require_once __DIR__.'/classes/Sale.php';
require_once __DIR__.'/classes/Sale4D.php';
require_once __DIR__.'/classes/Film.php';
require_once __DIR__.'/classes/Attore.php';


$Cinema = [
    new Cinema("The Space Cinema","Salita Michelangelo Garove 24 10144 Torino TO","011 481 1221")
];

$listaAttori = [];
$listaAttori[] = new Attore ("Mario","Rossi",1980);
$listaAttori[] = new Attore ("Luca","Rossi",1980);
$listaAttori[] = new Attore ("pinco","pallino",1400);

$listaFilm = [];
$listaFilm[] = new Film ("nomeFilm1",1,"horror",115,[$listaAttori[0],$listaAttori[2]]);
$listaFilm[] = new Film ("nomeFilm2",2,"comico",180,[$listaAttori[1],$listaAttori[2]]);
$listaFilm[] = new Film ("nomeFilm3",3,"thriller", 145 ,[$listaAttori[2],$listaAttori[0]]);


$saleLista = [];
$saleLista[] = new Sala (1, 60);
$saleLista[] = new Sala (2, 60);
$saleLista[] = new Sala (3, 60);
$saleLista[] = new Sala (4, 80);
$saleLista[] = new Sala4D (5, 60,["fumo","vibrazione"]); 

var_dump($saleLista)





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
    <ul>
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
        ?>
    </ul>  
</body>
</html>