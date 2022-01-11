<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direccion Ip</title>
</head>
<body>
            <!-- 3. Crea una cadena llamada $direccion_ip y asígnale una dirección
                    ip como 192.168.11.200. A continuación, separa en un array
                    con cada dígito de la dirección ip, y muestra cada dígito por
                    separado. Seguidamente reconstruye en una cadena la
                    dirección ip, pero que en lugar de separar por puntos los
                    dígitos aparezcan separados por dos puntos (:) y muéstralo.
                    [Pista: usar explode e implode] -->
        <?php 
                $direccion_ip ="192.168.11.200";
                $ip = explode(".", $direccion_ip);
                
                foreach ($ip as $num){
                    echo "$num <br>";
                }

                echo "<br>";
                
                $ip_separado_dos_puntos = implode(":", $ip);

                echo "$ip_separado_dos_puntos <br>";

        ?>  
</body>
</html>