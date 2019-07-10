



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Comprobacion</h1>
    <?php
    $clase = array("toni", "jorge", "julia", "jose", "mateo", "jaume", "petro", "alejandro", "fran", "adrian", "lolo", "cristian", "alexis", "david", "jordi", "luis");

    
    $random = rand(0,15);
echo($persona1);

    echo "<b>Clase:</b> ";


    foreach ($clase as $valor) {
        echo ' ' . $valor;
    };

    echo "<br>";

    $random1 = array_rand($clase, 15);
    

    
    // print_r($random1);
    

    


    if (in_array($clase[$random1[1]], $clase)) {
        unset($clase[$random1[1]]);
    }


    
 
    ?>
</body>
</html>







<?php

// $peña = [
//     'Julia',
//     'Jorge',
//     'Jose',
//     'Mateo',
//     'Jaume',
//     'Petro',
//     'Alejandro',
//     'Fran',
//     'Adri',
//     'Lolo',
//     'Cristian',
//     'Alexis',
//     'David',
//     'Jordi',
//     'Luis',
//     'Toni'
// ];
// $julia = 'Julia';
// $jorge = 'Jorge';
// $jose = 'Jose';
// $mateo = 'Mateo';
// $jaume = 'Jaume';
// $petro = 'Petro';
// $alejandro = 'Alejandro';
// $fran = 'Fran';
// $adri = 'Adri';
// $lolo = 'Lolo';
// $cristian = 'Cristian';
// $alexis = 'Alexis';
// $david = 'David';
// $jordi = 'Jordi';
// $luis = 'Luis';
// $toni = 'Toni';







if($random = 0){
    echo('Julia');
    unset($random);
}
else if($random = 1){
    echo('Jorge');
    unset($random);
}
else if($random = 2){
    echo('Jose');
    unset($random);
}
else if($random = 3){
    echo('Mateo');
    unset($random);
}
else if($random = 4){
    echo('Jaume');
    unset($random);
}
else if($random = 5){
    echo('Petro');
    unset($random);
}
else if($random = 6){
    echo('Alejandro');
    unset($random);
}
else if($random = 7){
    echo('Fran');
    unset($random);
}
else if($random = 8){
    echo('Adri');
    unset($random);
}
else if($random = 9){
    echo('Lolo');
    unset($random);
}
else if($random = 10){
    echo('Cristian');
    unset($random);
}
else if($random = 11){
    echo('Alexis');
    unset($random);
}
else if($random = 12){
    echo('David');
    unset($random);
}
else if($random = 13){
    echo('Jordi');
    unset($random);
}
else if($random = 14){
    echo('Luis');
    unset($random);
}
else if($random = 15){
    echo('Toni');
    unset($random);
}








// $julia,$jorge,$jose,$mateo,$jaume,$petro,$alejandro,$fran,$adri,$lolo,$cristian,$alexis,$david,$jordi,$luis,$toni