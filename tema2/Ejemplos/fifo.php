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
        //Al pasar la cola por referencia no hay que hacer nada más
        function addFifo(&$cola, $valores) {
            foreach($valores as $valor) {
                array_unshift($cola, $valor);
            }
        }

        //Mostrar cola
        function mostrarFifo($cola) {
            echo "<br>";
            foreach($cola as $valor) 
                echo $valor." ";
        }

        //Quitar por el final
        function eliminarFifo(&$cola) {
            return array_pop($cola);
        }


        $fifo = array("a","b");
        mostrarFifo($fifo);
        addFifo($fifo, array("c","d"));
        mostrarFifo($fifo);
        eliminarFifo($fifo);
        mostrarFifo($fifo);

        



    ?>

</body>