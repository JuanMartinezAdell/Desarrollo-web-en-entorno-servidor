<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej6</title>
</head>
<body>

    <!-- 5. Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
        Por ejemplo, para 56 mostrar: cincuenta y seis. -->
    <?php
        
        $numero = rand(0, 99);

        //intdiv hace la division de un numero por otro y se queda con el cociente de la operacion
        $dividendo = intdiv($numero, 10);
        $divisor = $numero % 10;

        echo "El numero es $numero <br>";

        if ($dividendo != 0) {
        switch ($dividendo) {
                case 1:
                    $letras = "diez";
                break;
                case 2:
                    $letras = "veinte";
                break;
                case 3:
                    $letras = "treinta";
                break;
                case 4:
                    $letras = "cuarenta";
                break;
                case 5:
                    $letras = "cincuenta";
                break;
                case 6:
                    $letras = "sesenta";
                break;
                case 7:
                    $letras = "setenta";
                break;
                case 8:
                    $letras = "ochenta";
                break;
                case 9:
                    $letras = "noventa";
                break;
                default:
                    $letras = "error";
                break;
            }
            }
        if ($divisor != 0) {
        switch ($divisor) {
            case 1:
                $letras = $letras . " y uno";
            break;
            case 2:
                $letras = $letras . " y dos";
            break;
            case 3:
                 $letras = $letras . " y tres";
            break;
            case 4:
                $letras = $letras . " y cuatro";
            break;
            case 5:
                $letras = $letras . " y cinco";
            break;
            case 6:
                $letras = $letras . " y seis";
            break;
            case 7:
                $letras = $letras . " y siete";
            break;
            case 8:
                $letras = $letras . " y ocho";
            break;
            case 9:
                $letras = $letras . " y nueve";
            break;
            default:
                $letras = $letras . "error";
            break;
        }
        }

        //mostramos el numero escrito en letras
        echo "Se escribe $letras";
        ?>
</body>
</html>