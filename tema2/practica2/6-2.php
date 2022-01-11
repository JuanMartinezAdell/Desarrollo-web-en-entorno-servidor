<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 6. Mejora el programa anterior de tal manera que el mensaje original lo divida primero en un array de palabras
            considerando el espacio en blanco como separador únicamente. A continuación, debe poner cada palabra del
            revés (hola -> aloh). Seguidamente encriptará cada palabra usando la función del ejercicio anterior. 
            Finalmente devolverá un string con cada palabra encriptada añadiendo un espacio en blanco entre cada
            palabra. El desencriptador hará lo contrario (y no digo más).
            Muestra el programa funcionando encriptando y desencriptando. -->

        <?php
           require("../practica2/5-2.php");

            function reves($mensaje)
            {
              //Separa el mensaje en digitos de 1 de largo
              $mensaje = str_split($mensaje, 1);
              //creo un array vacio para añadir los valores
              $cadena = array();
              for ($i = 0; $i < count($mensaje); $i++) {
                //Lo meto con unshift que lo mete po rla izquierda y queda del reves
                array_unshift($cadena, $mensaje[$i]);
              }
              //Junto el array y lo convierto en String
              $cadena = implode("", $cadena);
              return $cadena;
            }
            
            echo "<br><br>";
            $cad = encriptar(reves($cad), 5);
            echo "Encriptada al reves: $cad<br>";
            echo "<br><br>";
            $cad = reves(desencriptar($cad, 5));
            echo "Desencriptada: $cad";
        ?>
</body>
</html>