<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convierte</title>
</head>
<body>
    <!-- 2. Crea un array de nombres de alumnos, que contengan nombre de al menos 5 alumnos. A continuación, crea una función llamada
            convierteAlumnos($nombres, $opcion) donde el primer parámetro sea el array con los nombres de los alumnos, y el segundo parámetro pueden ser tres opciones:
            - “L”: transforma todos los strings del array
                $nombres a minúsculas y lo devuelve.
            - “U”: transforma todos los strings del array
                $nombres a mayúsculas y lo devuelve.
            - “M”: transforma todos los strings del array
            $nombres de modo que la primera letra de cada
            nombre de empresa sea mayúscula y el resto
            minúscula. Lo devuelve.
        Muestra un ejemplo de la función con cada una de las diferentes opciones.-->
        <h2>Convierte cadenas</h2>

        <?php

            $alumnos = array("Dani", "Ismael", "Fran", "Manuel", "Juan");

            function convierteAlumnos($nombre, $opcion){
                if($opcion=== 'L' || $opcion === 'l'){
                    $minusculas = strtolower($nombre);
                    return $minusculas;
                }else if($opcion == 'U' || $opcion == 'u'){
                    $mayusculas = strtoupper($nombre);
                    return $mayusculas;
                }else if($opcion == 'M' || $opcion == 'm'){
                   $convierte = ucfirst($nombre);
                   return $convierte;
                }
            }
            
            
            foreach ( $alumnos as $nombres){
                echo convierteAlumnos($nombres, 'L');
                echo "<br>";
            }

            echo "<br>";

            foreach ( $alumnos as $nombres){
                echo convierteAlumnos($nombres, 'U');
                echo "<br>";
            }

            echo "<br>";

            foreach ( $alumnos as $nombres){
                echo convierteAlumnos($nombres, 'M');
                echo "<br>";
            }
        ?>
</body>
</html>