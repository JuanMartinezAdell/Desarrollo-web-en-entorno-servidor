<?php
        $passwords = array(
            "jjgb" => "asdfghj",
            "dani89" => "pepito88",
            "manu05" => "123456",
            "isamail" => "9876asdf",
            "frackye" => "yanoesprogramacion"
        );

        //Todas las claves del array asociativo
        $users = array_keys($passwords);
        foreach($users as $usuario) {
            echo $usuario. ", ";
        }

        //Comprobar que una key está en el array
        if (array_key_exists("dani89", $passwords)) {
            echo "El usuario dani89 está";
        }
        echo "<br>";
         
        //Todos los valores del array asociativo
        $contras = array_values($passwords);
        foreach($contras as $clave) {
            echo $clave . ", ";
        }

        //Comprobar que un valor está en el array
        if (in_array("123456",$passwords)) {
            echo "Esa contraseña está";
        }

        echo "<br>";
        $alumnos = array("Javi", "Dani", "Ismael", "Manu1", "Manu2", "Fran");
        $notas = array(5,7,8,3,5,6);
        $alumnosNotas = array_combine($alumnos, $notas);
        //shuffle($alumnosNotas); //Desordena pero cambia las keys a numéricas
        foreach($alumnosNotas as $key => $value) {
            echo $key. " ha sacado " . $value . "<br>";
        }
    
        echo "<br>";
        //Quita un elemento por el principio
        array_shift($alumnosNotas);
        foreach($alumnosNotas as $key => $value) {
            echo $key. " ha sacado " . $value . "<br>";
        }

        echo "<br>";
        //array_unshift($alumnosNotas, 3); //Solo para keys numéricas
        $alumnosNotas = array("Nerea" => 5) + $alumnosNotas; //Mejor para insertar en arrays asociativos
        foreach($alumnosNotas as $key => $value) {
            echo $key. " ha sacado " . $value . "<br>";
        }

        echo "<br>";
        //Quita un elemento del final
        array_pop($alumnosNotas);
        foreach($alumnosNotas as $key => $value) {
            echo $key. " ha sacado " . $value . "<br>";
        }
    ?>