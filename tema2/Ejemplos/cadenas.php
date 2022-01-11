<?php
    $cadena = "Este año nos toca trabajar mucho";

    //Tratar las cadenas como si fueran arrays
    //strlen: longitud de la cadena
    for($i=0; $i<strlen($cadena); $i++) {
        echo "$cadena[$i] ";
    }

    echo "<br>";
    //Quedarnos con una parte de la cadena. Desde la posición, tantos elementos como diga el parámetro final
    echo substr($cadena, 9, 24);

    echo "<br>";
    $cadena = "php|python|java|javascript|c#";
    //Crea un array con cada valor que haya encontrado usando como separador el caracter dado
    $lenguajes = explode("|", $cadena);
    foreach($lenguajes as $lenguaje) {
        echo $lenguaje.", ";
    }

    echo "<br>";
    $lenguajes = array("Java", "Ruby", "Go", "Rust", "Scala");
    echo implode("!", $lenguajes);


    echo "<br>";
    //Cuenta la aparición de cada letra
    foreach (count_chars($cadena, 1) as $i => $val) {
        echo "Se ha encontrado $val instancia (s) de \"" , chr($i) , "\" en la cadena.\n";
     }

     echo "<br>";
     $mensaje = "En un lugar de la Mancha de cuyo nombre no quiero acordarme, vivia un hidalgo ...";
     //Muestra el número de palabras (0), un array con las palabras(1), palabra y posicion (2)
     $palabras = str_word_count($mensaje, 2);
     foreach($palabras as $pos => $palabra) {
         echo strtoupper($palabra) . " - " . $pos . "<br>";
     }

     echo "<br>";
     //Cuenta las veces que "un" sale en la cadena $mensaje
     echo substr_count($mensaje, "un");
     echo "<br>";
     echo strpos($mensaje,"Mancha");

     echo "<br>";
     $texto = "Mi nombre es Pepe, pero no es Lucas";
     //Sustituye cada ve que encuentra "es" en el mensaje $texto por "is"
     echo str_replace("es", "is", $texto);


     echo "<br>";
     $nombre = "Javier";
     $localidad = "Mojácar";
     vprintf("%s vive en %s", array($nombre, $localidad));

     echo "<br>";
     $texto = "hola ";
     $texto .= "mundo";
     echo $texto

    
?>