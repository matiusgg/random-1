



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
    $random1 = rand(0,15);

    foreach($clase AS $key => $valor) {

        $random = rand($key[0],$key[15]);
        $random1 = rand($key[0],$key[15]);

        switch($key){

            case $key = 0:
                echo $valor[0];
                break;

                case $key = 1:
               echo  $valor[1];
                break;

                case $key = 2:
                $valor['julia'];
                break;

                case $key = 3:
                $valor['jose'];
                break;

                case $key = 4:
                $valor['mateo'];
                break;

                case $key = 5:
                $valor['jaume'];
                break;

                case $key = 6:
                $valor['preto'];
                break;

                case $key = 7:
                $valor['alejandro'];
                break;

                case $key = 8:
                $valor['fran'];
                break;

                case $key = 9:
                $valor['adrian'];
                break;

                case $key = 10:
                $valor['lolo'];
                break;

                case $key = 11:
                $valor['cristian'];
                break;

                case $key = 12:
                $valor['alexis'];
                break;

                case $key = 13:
                $valor['david'];
                break;

                case $key = 14:
                $valor['jordi'];
                break;

                case $key = 15:
                $valor['luis'];
                break;
        }

        echo($random . ' - ' . $random1);
        echo('<br>');
    }

//     $c = 0;

//     for($i = 0; $i < 15; $i++) {
//         echo($random . ' - ' . $random1);
//         echo('<br>');

        
//     }

//     echo "<b>Clase:</b> ";


// if($random = 0 && $random1 = 0){
//     echo('Julia');
//     unset($random);
// }
// else if($random = 1 && $random1 = 1){
//     echo('Jorge');
//     unset($random);
// }
// else if($random = 2 && $random1 = 2){
//     echo('Jose');
//     unset($random);
// }
// else if($random = 3 && $random1 = 3){
//     echo('Mateo');
//     unset($random);
// }
// else if($random = 4 && $random1 = 4){
//     echo('Jaume');
//     unset($random);
// }
// else if($random = 5 && $random1 = 5){
//     echo('Petro');
//     unset($random);
// }
// else if($random = 6 && $random1 = 6){
//     echo('Alejandro');
//     unset($random);
// }
// else if($random = 7 && $random1 = 7){
//     echo('Fran');
//     unset($random);
// }
// else if($random = 8 && $random1 = 8){
//     echo('Adri');
//     unset($random);
// }
// else if($random = 9 && $random1 = 9){
//     echo('Lolo');
//     unset($random);
// }
// else if($random = 10 && $random1 = 10){
//     echo('Cristian');
//     unset($random);
// }
// else if($random = 11 && $random1 = 11){
//     echo('Alexis');
//     unset($random);
// }
// else if($random = 12 && $random1 = 12){
//     echo('David');
//     unset($random);
// }
// else if($random = 13 && $random1 = 13){
//     echo('Jordi');
//     unset($random);
// }
// else if($random = 14 && $random1 = 14){
//     echo('Luis');
//     unset($random);
// }
// else if($random = 15 && $random1 = 15){
//     echo('Toni');
//     unset($random);
// }




    // foreach ($clase as $valor) {
    //     echo ' ' . $valor;

    //     echo (rand($valor[1], $valor[15]) . "<br>");

    // };

    // echo "<br>";

    // $random1 = array_rand($clase, 15);

    // echo $random1;
    

    
    // print_r($random1);
    

    


    // if (in_array($clase[$random1[1]], $clase)) {
    //     unset($clase[$random1[1]]);
    // }


    
 
    ?>
</body>
</html>




