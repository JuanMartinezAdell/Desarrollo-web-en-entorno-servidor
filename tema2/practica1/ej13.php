<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifo</title>
</head>
<body>
        <!--   13.  Implementa una cola (FIFO: primero en entrar primero en salir) con php. Crear las
                    funciones para añadir o eliminar n elementos en la cola, para vaciar la cola y para
                    mostrar el contenido de la cola. Con esas funciones haz un programa en el que se
                    pueda apreciar claramente el funcionamiento de la cola llamando a todas las
                    funciones implementadas. -->
        <?php 
             $pila = array ("uno", "dos", "tres", "cuatro", "cinco"); //Array

               
            array_unshift($pila, "menos_uno", "cero"); //Añado elementos a la cola

            foreach ( $pila as $n){
                echo "$n";
                echo "<br>";
            }

            echo "<br>";

            $quitar = array_pop($pila); //Quito elementos de la cola

            foreach ( $pila as $n){
                echo "$n";
                echo "<br>";
            }

            //Profesor con funciones

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
</html>