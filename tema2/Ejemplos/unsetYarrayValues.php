<?php

    $nombres = array("Javier", "Dani", "Fran","Jaime");
    unset($nombres[1]);

    foreach($nombres as $nombre) {
        echo $nombre ."<br>";
    }

    echo "---------<br>";

    for($i=0; $i<count($nombres);$i++) {
        echo $nombres[$i] . "<br>";
    }

    $nombres = array_values($nombres);
    for($i=0; $i<count($nombres);$i++) {
        echo $nombres[$i] . "<br>";
    }

?>