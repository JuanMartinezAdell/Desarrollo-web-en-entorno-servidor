<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <!-- 7. Hacer una página PHP que para un array de 5 elementos muestre por pantalla la
    tabla de multiplicar de dichos elementos (del 1 al 10) (for o while) -->


    <?php
        //Array 5 elementos
        $arrays = array(1,2,3,4,5);

        
        foreach($arrays as $valor){
            for($i =0; $i<=10; $i++){
                echo $i . " x " . $valor . "=" . $i*$valor;
                echo "<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>