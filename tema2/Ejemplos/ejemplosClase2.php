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

    require_once "../funcss.php";
 
    $mensaje = "<p>Esto es un mensaje</p>";
    echo negrita($mensaje);

    $num = 4;
    incremento($num);
    echo $num;

    $num = decremento($num);
    echo $num;

    $colores = ["rojo", "amarillo", "verde"];
    cambiaColor($colores);
    echo $colores[1];

    ?>

</body>
</html>