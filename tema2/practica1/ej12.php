<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario</title>
</head>
<body>
    <!-- 12. Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array asociativo.
             Haz un programa que dada una palabra compruebe si está en el diccionario y si es así que muestre 
             la traducción, y si no está que indique que no está en el diccionario. A continuación, muestra 
             el diccionario ordenador en español -->
        
        <?php

            $diccionario = [

                "uno" => "one",
                "dos" => "tow",
                "tres" => "three",
                "cuatro" => "four",
                "cinco" => "five",
                "seis" => "six",
                "siete" => "siete",
                "ocho" => "eight",
                "nueve" => "nine",
                "diez" => "ten",
                "Once" => "eleven",
                "doce" => "twelve",
                "trece" => "thirteen",
                "cartoce" => "fourteen",
                "quince" => "fifteen",
                "diecies" => "sixteen",
                "diecisiete" => "seventeen",
                "dieciocho" => "eigtheen",
                "dieciuneve" => "ninetheen",
                "veinte" => "twenty",
                ];

                function buscaPal(  $palEsta, $dicci ){

                    foreach ( $dicci as $pal => $traduccion ){
                            if($pal == $palEsta ){
                                return  "El significado de $pal es $traduccion <br>";
                            }
                    }
                    
                    return  "La palabra no esta en el diccionario <br>";
                }

                function orednaDiccionario ( $dicci ){

                    asort($dicci);

                    foreach ( $dicci as $pal => $traduccion ){
                    
                        echo " $pal = $traduccion\n";
                        echo "<br>";
                    }       
                }

                $palabra = "Cuatro";

                echo buscaPal( $palabra , $diccionario );

                echo "<br>";

                echo "El diccionario ordenado: <br>";
                orednaDiccionario( $diccionario );
                         

        ?>
</body>
</html>