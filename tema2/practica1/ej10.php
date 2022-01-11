<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej10</title>
</head>
<body>
    <!-- 10. Rellena un array de 10 números enteros, con los 10 primeros números naturales.
             Calcula la media de los que están en posiciones pares y muestra los impares por pantalla.   -->
    <?php

        $num=[1,2,3,4,5,6,7,8,9,10];
        $acu=0;

       foreach($num as $n){
            if($n%2==0){
                $acu+=$n;
            }else{
                echo $n . "<br>";
            }
        }

        $med=$acu/10;

        echo "la media de los 10 numeros pares es: " . $med;


    ?>
</body>
</html>