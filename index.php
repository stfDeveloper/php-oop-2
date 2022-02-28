<?php 
require_once __DIR__.'/classes/cinema.php';
require_once __DIR__.'/classes/sale.php';
require_once __DIR__.'/classes/sale4D.php';
require_once __DIR__.'/classes/film.php';

$Cinema = [
    new cinema("The Space Cinema","Salita Michelangelo Garove 24 10144 Torino TO","011 481 1221")
];

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