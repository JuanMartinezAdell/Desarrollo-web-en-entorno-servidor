<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <!-- 4. Crear un array llamado $word_list_en con 40 palabras en inglés. Crea otro array llamado $word_list_es con las mismas
                        40 palabras en el mismo orden, pero en español. El ejercicio consiste en hacer un traductor literal de español a inglés o
                        viceversa, es decir, creamos una variable con una cadena de texto, debe recorrerla y devolverla en el idioma traduciendo
                        una por una las palabras (se supone que están en la misma posición en los arrays). Para la cadena de texto a traducir
                        usa solo palabras de entre las 40 que has utilizado. -->
                
                <h1>Traductor literal de español a inglés o viceversa</h1>

                <?php 

                    $word_list_en = array("one", "two", "three", "four", "five", "six", "seven", "eigth", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fiveteen",
                                          "sixteen", "seventeen", "eighteen", "nineteen", "twenty", "twenty one", "twenty two", "twenty three","twenty four", "twenty five", "twenty six",
                                         "twenty seven", "twenty eigth", "twenty nine", "thirty", "thirty one", "thirty two", "thirty three", "thirty four", "thirty five", "thirty six",
                                         "thirty seven", "thirty eight", "thirty nine", "forty");

                    $word_list_es = array("uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once", "doce", "trece", "catorce", "quince", "dieciseis",
                                          "dicecisiete", "dieciocho", "dicecinueve", "veinte", "veintiuno", "ventidos", "ventitres", "veinticuatro", "veinticinco", "veintiseis", "ventisiete",
                                          "ventiocho", "ventinueve", "treinta", "treinta y uno", "treinta y dos", "treinta y tres", "treinta y cuatro", "treinta y cinco", "treinta y seis",
                                          "treinta y siete", "treinta y ocho", "treinta y nueve", "cuarenrta");

                    $ingles = "seventeen";
                    $español = "tres";
                    

                    for($i=0; $i<40; $i++) {

                        if ($word_list_en[$i] === $ingles ){ //Recorro el array y si encuentro la palabra la traduzco
                                    echo "$word_list_en[$i] =>  $word_list_es[$i] <br>";
                        }
                        if($word_list_es[$i] === $español){ //Recorro el array y si encuentro la palabra la traduzco
                            echo "$word_list_es[$i] => $word_list_en[$i] <br>";
                        }
                        
                    }
    
                ?>
</body>
</html>