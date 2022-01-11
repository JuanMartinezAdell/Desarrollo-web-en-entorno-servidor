<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practivca 2 ej 1</title>
</head>
<body>
    <!-- 1. Crea una cadena de texto con el texto “Lo que estoy
            escribiendo es un string”. Crea una segunda cadena de texto
            “muuuuuy largo”. Concatena las dos cadenas en una sóla y
            luego muéstrala. Llama a una función que diga la posición de la
            primera ‘e’ y de la última ‘u’. También calcula la posición de la
            palabra “texto”.-->
        <h2>Busca la primera vocal y la última</h2>

        <?php
            $cadena1 = "Lo que estoy escribiendo es un string ";
            $cadena2 = "muy largo";

            $cadena3 = $cadena1 . $cadena2;

            echo $cadena3;

            echo "<br><br>";


            $privocal = 'e';
            $ultvocal = 'u';

            $pripos = strpos($cadena3,  $privocal); //Busco la primera aparicion de la vocal pasada como parametro
            $ultpos = strrpos($cadena3, $ultvocal);  //Busco al ultima aparicion de la vocal pasada como parametro

            if ($pripos === false) {
                echo "El caracter '$privocal' no fue encontrada en la cadena '$cadena3'";
            } else {
                echo "La primera aparicion de la vocal '$privocal' fue encontrada en la cadena: '$cadena3'<br>";
                echo " y existe en la posición $pripos";
            }

            echo "<br><br>";

            if ($ultvocal === false) {
                echo "El caracter '$ultvocal' no fue encontrada en la cadena '$cadena3'";
            } else {
                echo "La última aparición de la vocal '$ultvocal' fue encontrada en la cadena: '$cadena3'<br>";
                echo " y existe en la posición $ultpos";
            }
            
        ?>       


    
</body>
</html>