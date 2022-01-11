<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 4. Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres
        variables $a, $b y $c, muestra la ecuación y sus soluciones. Si no existen, debe indicarse por pantalla. -->
    <h2>Ecuacion de segundo grado (ax2 + bx + c = 0): </h2>

    <?php

        $a = rand();
        $b= rand();
        $c = rand();

        function ecuacion($a,$b,$c){
            $p = Sqrt((pow($b,2))+((-4)*($a)*($c)));
            $x1 = (-$b) + $p;
            $x2 = (-$b) - $p;
            $x1=($x1/(2*$a));
            $x2=($x2/(2*$a));
            return "X1 es igual a $x1 y X2 es igual a $x2";
            }

        echo ecuacion($a,$b,$c);
    ?>
    
    
</body>
</html>