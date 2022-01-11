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
    /*
    Esto es un ejemplo de if
    */
        $opcion = 2;
        if ($opcion == 1) { 
    ?>

    <a href="http://" target="_blank" rel="noopener noreferrer">Enlace</a>

    <?php
        } 
        echo "Fin";
    ?>

    <?php
        $opcion = 3;
        if($opcion == 3) {
            echo "<a href=''>Enlace</a>";            
        }
        echo "Fin";

        $opcion = "Hola Mundo";
        echo $opcion;

        $opcion = 0.0;
        if ($opcion) { //condicion es false
            echo "Es true";
        } else {
            echo "Es false";
        }

        echo "<br>";

        $nombre = "Javier";
        echo "Mi nombre es {$nombre}" . "Mi moneda es el dólar €<br>" . "Salto<br>";

        $nulo = null;
        echo $nulo;
        unset($opcion);

        //Pregunta por si el valor de una variable es null
        if (is_null($nulo)) 
            echo "Null";

        $numero = 4;
        echo ($numero == 4) ? "es 4" : "esta vacia";
            
        echo "<br>";
        ///////////// ARRAYS
        $notas = array(4, 5, "hola", 3, true);
        echo $notas[0];
        echo $notas[4];

        $nombres = ["Javier", "Fran", "Dani"];
        echo $nombres[1];

        //for
        echo "<br>";
        for($i = 0; $i<sizeof($nombres); $i++) {
            echo $nombres[$i];
        }

        //Array asociativo
        $form = ["nombre" => "Javier", "direccion" => "Su casa", "pais" => "España"];
        echo $form["pais"];

        //foreache
        echo "<br>";
        foreach($form as $clave => $valor) {
            echo "$clave:$valor, ";
        }


    ?>
    
</body>
</html>