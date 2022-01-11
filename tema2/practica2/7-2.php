<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej8 realcion2</title>
</head>
<body>
                <!--  7. Vamos a crear un programa que calcule el IVA de un carrito de
                         la compra. El carrito será un array bidimensional asociativo de este tipo: (Puedes añadir más productos y más campos a tu elección)
                         $carrito = array(array(“id” => 1234, “nombre” => “PS4”, “precio” => 349.95, “cant” => 2, “iva_r”=> 0), array(“id” => 1235, “nombre” => “iPhone XS”, “precio” => 1249.95, “cant”
                         => 1, “iva_r” => 0), array(“id” => 1236, “nombre” => “Chocolate”, “precio” =>
                         9.95, “cant” => 5, “iva_r” => 1))
                         Deberéis crear una función llamada subtotal($linea_pedido) que calcule el precio de cada línea de pedido, multiplicando el precio
                         por la cantidad y aplicando el iva correspondiente, si iva_r es 0 será del 21% y si iva_r es 1 será del 10%.
                         Mostrar en una tabla HTML el carrito de la compra (nombre, precio, cantidad y subtotal). En la última fila aparecerá el total del pedido a pagar.
                         Se tendrá en cuenta la visualización y el estilo del carrito de la compra resultante. -->

                <?php

                     $carrito = array(
                                      array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r"=> 0), 
                                      array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant"=> 1, "iva_r" => 0), 
                                      array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1),
                                    );

                    function subtotal($linea_pedido ){
                       //Si es ceo le aplico 10%
                       if($linea_pedido['iva_r']==0){
                           $total = $linea_pedido['precio'] * 0.10;
                           //si iva es 1 le aplico el 21%
                       }else if ($linea_pedido['iva_r'] == 0){
                           $total = $linea_pedido['precio'] * 0.21;
                           //Si no es ninguno 0
                       } else {
                           $total = 0;
                       }
                       //Caluclo el total del producto
                       $resultado = ($linea_pedido['precio'] + $total) * $linea_pedido['cant'];
                       return $resultado;
                    }

                    /*Mostrar en una tabla HTML el carrito de la compra (nombre, precio, cantidad y subtotal). 
                    En la última fila aparecerá el total del pedido a pagar.
                    Se tendrá en cuenta la visualización y el estilo del carrito de la compra resultante.*/

                    $pagar=0;

                    echo "<table border='1' style='border-collapse: collapse'>";

                    //este primer foreach saca las keys del primer array con valores y los imprime en la cabecera de la tabla
                    $etiquetas = array_keys($carrito[0]);
                    foreach ($etiquetas as $etiqueta) {
                        echo "<th>" . strtoupper($etiqueta) . "</th>";
                    }
                    echo "<th>SUBTOTAL</th>";

                    //Dado el array bidimensional dame ve dandome arrays 
                    foreach ($carrito as $objeto) {
                        echo "<tr>";

                        //De un array asociativo saca las key y los valores e introduce los valores en las columnas
                        foreach ($objeto as $key => $value) {
                        echo "<td>";
                        echo "$value";
                        echo "</td>";
                        }

                        //Como subtotal no forma parte del array objeto hay que meterlo a mano
                        echo "<td>";
                        $pagar += subtotal($objeto);
                        echo (subtotal($objeto));
                        echo "</td>";

                        echo "</tr>";
                    }

                    echo "<tr>";
                    echo "<td><strong>TOTAL</strong></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td><strong>" . $pagar . "</strong></td>";

                    echo "</table>";

            ?>
</body>
</html> 