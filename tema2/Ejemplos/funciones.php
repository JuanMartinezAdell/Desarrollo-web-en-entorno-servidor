<?php

    /**
     * Función que pasa una cadena a negrita
     */

    function negrita($cadena) {
        return "<strong>$cadena</strong>";
    }

    //Paso por referencia
    function incremento(&$numero) {
        $numero = $numero + 10;
    }

    //Sin paso por referencia
    function decremento($numero) {
        $numero--;
        return $numero;
    }

    //Array pasado por referencia
    function cambiaColor(&$colores) {
        $colores[1] = "rosa";
    }



?>