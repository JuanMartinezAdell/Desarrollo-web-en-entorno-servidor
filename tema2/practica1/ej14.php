<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
        <!-- 14. Crea un array de notas de alumnos. Cada elemento del array debe contener las notas de un alumno, 
        incluyendo nombre, materia y nota. Haz un programa con 10 notas de alumnos. Luego debes mostrar las 
        notas ordenadas en orden descendente por alumno, luego ordenadas por nombre, luego mostrar la nota media del curso,
        y el número de alumnos suspensos. -->

        <?php
                $notas = array(
                    array("nombre" => "Dani", "materia" => "cliente", "nota" => 8),
                    array("nombre" => "Dani", "materia" => "servidor", "nota" => 7),
                    array("nombre" => "Ismael", "materia" => "fol", "nota" => 6),
                    array("nombre" => "Ismael", "materia" => "diseño", "nota" => 7),
                    array("nombre" => "Juan", "materia" => "fol", "nota" => 4),
                    array("nombre" => "Juan", "materia" => "libre", "nota" => 4),
                    array("nombre" => "Fran", "materia" => "cliente", "nota" => 8),
                    array("nombre" => "Fran", "materia" => "servidor", "nota" => 8),
                    array("nombre" => "Manu", "materia" => "fol", "nota" => 5),
                    array("nombre" => "Manu", "materia" => "cliente", "nota" => 8),
                );
            
                for($i=0; $i<count($notas); $i++) {
                    //Me recorro cada elemento del array, que a su vez es un array asociativo
                    foreach ($notas[$i] as $key => $value) {
                        echo "$key: $value - ";
                    }
                    echo "<br>";
                }

                
        ?>
</body>
</html>