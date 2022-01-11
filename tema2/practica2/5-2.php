<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- 5. Vamos a construir un encriptador y desencriptador de mensajes. Crearemos dos funciones:
                - encriptar($mensaje,$clave) o donde el primer argumento sea el mensaje a encriptar o el segundo argumento sea el número de letras a desplazar a la derecha por
                cada letra, por ejemplo, la b con $clave=3 se transformará en en la f. o La función devolverá el mensaje cifrado sustituyendo los espacios en
                blanco del final y cada letra del mensaje por la correspondiente según la clave.
                - desencriptar($mensaje,$clave) o donde el primer argumento sea el mensaje a encriptar o el segundo argumento sea el número de letras a desplazar a la izquierda por
                cada letra, por ejemplo, la f con $clave=3 se transformará en en la b. o La función devolverá el mensaje cifrado sustituyendo cada letra del mensaje 
                por la correspondiente según la clave.
                Para mostrar que lo has hecho bien encripta un mensaje y muéstralo, desencríptalo y muestra el mensaje que coincide con el original. Pista: 
                busca y utiliza las funciones PHP para pasar un carácter a su correspondiente dígito ASCII y viceversa.-->   
                 
        <?php

        function encriptar($mensaje, $clave)
        {
                $encriptado = array();
                //elimino los espacios en blanco
                $mensaje = trim($mensaje);
                //divido el mensaje en partes de longitud 1
                $mensaje = str_split($mensaje,  1);
                foreach ($mensaje as $letra) {
                        //cada letra la convierto en ASCII y le sumo el valor encriptado
                        array_push($encriptado, (ord($letra) + $clave));
                    }
                //junto cada valor ASCII unido por una comilla
                $encriptado = implode(", ", $encriptado);
                return $encriptado;
        }

        function desencriptar($mensaje, $clave)
        {
                $encriptado = array();
                //Separo el string en un array indicandole el corte en la comilla
                $mensaje = explode(",", $mensaje);
                foreach ($mensaje as $letra) {
                    //convierto el valor ASCII menos la clave en su letra correspondiente y lo meto al array
                    array_push($encriptado, (chr(intval($letra) - $clave)));
                }
                //Junto las letras 
                $encriptado = implode("", $encriptado);
                return $encriptado;
        }

        $cad = "¡El enemigo nos está rodeando! ¡Encuéntrese conmigo en el café a las 8.30am para obtener su pasaporte falso!";
        echo "Mensaje: ";
        echo "$cad";
        echo "<br><br>";
        $cad = encriptar($cad, 3);
        echo "Encriptado ";
        echo "$cad";
        echo "<br><br>";
        $cad = desencriptar($cad, 3);
        echo "<br>Desencriptado: ";
        echo "$cad";

        ?>

</body>
</html>