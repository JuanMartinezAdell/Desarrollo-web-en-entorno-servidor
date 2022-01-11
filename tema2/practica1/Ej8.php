<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria primitiva</title>
</head>
<body>

    <!-- 8. Crea un generador aleatorio de apuesta de la Lotería Primitiva. Cada vez que recargues la página aparecerá una combinación diferente. -->

    <?php

        for( $i=1; $i<=8; $i++){
            $primitiva = rand(1, 49);
            echo $primitiva . " ";
            
        }
    ?>
    
</body>
</html>