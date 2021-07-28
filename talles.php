<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talles dinámicos</title>
</head>
<body>
    <h3>Talles dinamicos</h3>
    <?php
        //hardcodeado

        $talles[0] = "S";
        $talle[1] = "M";
        $talle[2] = "L";

        //calcula la longitud del array

        $longTalles = count($talles);

        //recorremos cada uno de los elementos del array para mostrarlos
        for ($i=0; $i < $longTalles; $i++) { 
            //generando codigo html
            echo "<p>".$talles[$i]."</p>";
        }
    ?>
</body>
</html>