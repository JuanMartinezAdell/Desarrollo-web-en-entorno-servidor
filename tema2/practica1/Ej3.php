<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 3</title>
</head>
<body>
    <!--  3. Tenemos el radio de un circulo almacenado en la variable $radio obtenida de
    forma aleatoria, calcular y mostrar por pantalla el volumen de una esfera de ese radio.-->
    <?php

            $radio = rand(1, 25);
            const PI = 3.14;

            $volumen = 4 / 3 * PI * $radio**3;
            
             echo "El volumen de la esfera es " . $volumen;

    ?>
</body>
</html>