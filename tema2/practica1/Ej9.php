<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulos</title>
</head>
<body>
    <!--9. Realiza un programa que pinte 5 círculos en horizontal cada uno de un color diferente aleatorio.
            Puedes usar la función SVG circle para dibujar los círculos. -->
    
    <?php
          
          /* Creo un array de colores y con rand lo asignando de manera aleatoria */

          for( $i=0; $i<5; $i++){
            $colores = [ "red", "blue" , "green", "yellow", "white", "black"];
            $ale = rand(1, 5);
            $color = $colores[$ale];

            echo "<svg height='100' width='100'>";
            echo "<circle cx='". 50 + $i ."' cy='50' r='40' stroke='black' stroke-width='3' fill='{$color}' />";
            echo "</svg> ";
          }
          
         // Profesor 

          echo "<br>";

          for($i = 0; $i < 5; $i++) {
              $color = "rgb(". rand(0,255). "," . rand(0,255). "," . rand(0,255) . ")";
              echo "<svg height='100' width='100'>";
              echo "<circle cx='". 50 + $i ."' cy='50' r='40' stroke='black' stroke-width='3' fill='{$color}' />";
              echo "</svg> ";
          }
       
    ?>
   
</body>
</html>