<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1</title>
</head>
<body>
    <!-- 1. Partiendo de 2 variables $primera y $segunda con valores aleatorios, hacer una
        página PHP que calcule y muestre por pantalla:
        - la diferencia de $primera menos $segunda
        - la división de $primera entre $segunda
        Añade un comentario que explique la función de generar números aleatorios. -->
   
   <?php

        $primera = rand(1, 10); //con esta funcion generamos valores aleatorios entre 1 y 10, se pude escificar el rango
        $segunda = rand(1, 10);

        echo $primera;
        echo "<br>";
        echo $segunda;
        echo "<br>";

        echo $primera . " - " . $segunda . " = " . $primera - $segunda;

        echo "<br>";
        echo $primera . " / " . $segunda . " = " . $primera / $segunda;


    ?>
</body>
</html>