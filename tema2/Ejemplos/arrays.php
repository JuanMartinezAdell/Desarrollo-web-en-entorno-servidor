<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Ejercicios con arrays    

    $contacto = array(
        "nombre" => "Luis",
        "apellidos" => "García Ferrero",
        "edad" => 41,
        "pais" => "España",
        "lenguajes" => array("Java", "PHP", "Javascript")
    );

    foreach ($contacto as $key => $value) {
        //No puedo imprimir una array como si fuera una cadena, tengo que pintar sus valores
        if ($key == "lenguajes") { 
            echo $key. " ";
            foreach ($value as $key => $value) {
                echo "$value, ";
            }
        } else {
            echo "$key:$value <br>";  
        }
    }

    /**
     * ORDENACIÓN
     */

    //sort y rsort
    echo "<br>";
    $numeros = array(3,9,4,77, 14);
    sort($numeros);
    rsort($numeros);
    for($i=0; $i<count($numeros); $i++) {
        echo $numeros[$i]." ";
    }

    echo "<br>";
    $contacto = array(
        "nombre" => "Luis",
        "apellidos" => "García Ferrero",
        "edad" => 41,
        "pais" => "España",
    );

    asort($contacto,SORT_NUMERIC);
    foreach ($contacto as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    echo "<br>";
    ksort($contacto);
    foreach ($contacto as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    echo "<br>";
    $tabla = array_pad($numeros,10,0);
    for($i=0; $i<count($tabla); $i++) {
        echo $tabla[$i]." ";
    }

    $colores = array("blanco", "rojo", "azul");
    list($v1, $v2, $v3) = $colores;
    echo $v3;

    //Array_merge
    $contactoPlus = array(
        "ciudad" => "Paris",
        "email" => "lgf@gmail.com"
    );

    //Mezclar o unir dos arrays
    $contactoTotal = array_merge($contacto, $contactoPlus);
    foreach ($contactoTotal as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    //Quedarme con un trozo de un array
    $slice = array_slice($tabla,3,5);
    for($i=0; $i<count($slice); $i++) {
        echo $slice[$i]." ";
    }

    //Buscar un elemento en un array
    if (in_array("Paris",$contactoPlus,false)) {
        echo "Está París";
    }

    //array_keys Devuelve todas las claves de un array asociativo
    //array_values Devuelve todos los valores de un array asociativo
    echo "<br>";
    $claves = array_keys($contactoTotal);
    for($i=0; $i<count($claves); $i++) {
        echo $claves[$i]." ";
    }
    $valores = array_values($contactoTotal);
    for($i=0; $i<count($valores); $i++) {
        echo $valores[$i]." ";
    }

    echo "<br>";
    //Array Multidimensional
    $contactos = array(
        array("nombre" => "Dani", "afición" => "videojuegos"),
        array("nombre" => "Nerea", "afición" => "salir de fiesta")
    );

    for($i=0; $i<count($contactos); $i++) {
        //Me recorro cada elemento del array, que a su vez es un array asociativo
        foreach ($contactos[$i] as $key => $value) {
            echo "$key: $value - ";
        }
        echo "<br>";
    }


    ?>
</body>
</html>